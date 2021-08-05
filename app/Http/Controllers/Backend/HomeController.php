<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\home;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('backend.home.index');
    }

    public function store(Request $request)
    {        
        // dd($request);

        $request->validate([
            'image'  => 'mimes:jpeg,png,jpg|max:20000|dimensions:width=1330,height=745',
            'order' => 'numeric'            
        ]); 
    
        if($request->file('image'))
        {            
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/home'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 
        // dd($image_url);

        $addimage = new home;
        
        $addimage->order=$request->order;
        $addimage->image=$image_url;
        $addimage->save();

        return back()->withFlashSuccess('Added Successfully');                      

    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = home::all();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.home.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    ->addColumn('image', function($data){
                        $img = '<img src="'.url('files/home',$data->image).'" style="width: 100%">';
                     
                        return $img;
                    })
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {
        $home = home::where('id',$id)->first();
        
        // dd($home);              

        return view('backend.home.edit',[
            'home' => $home         
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);

        $request->validate([
            'image'  => 'mimes:jpeg,png,jpg|max:20000|dimensions:width=1330,height=745',
            'order' => 'numeric'            
        ]);      
        
        if($request->file('image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/home'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{            
            $detail = home::where('id',$request->hidden_id)->first();
            $image_url = $detail->image;            
        }    
        
        $upimage = new home;

        $upimage->order=$request->order;
        $upimage->image=$image_url;

        home::whereId($request->hidden_id)->update($upimage->toArray());
   
        return redirect()->route('admin.home.index')->withFlashSuccess('Updated Successfully');                   

    }

    public function destroy($id)
    {        
        $data = home::findOrFail($id);
        $data->delete();   
    }


}

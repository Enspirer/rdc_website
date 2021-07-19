<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Awards;

class AwardsController extends Controller
{
    public function index()
    {
        return view('backend.awards.index');
    }

    public function store(Request $request)
    {        
        // dd($request);

        $request->validate([
            'image'  => 'mimes:jpeg,png,jpg|max:25000',
            'order' => 'numeric'            
        ]); 
    
        if($request->file('image'))
        {            
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/awards'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 
        // dd($image_url);

        $addaward = new Awards;

        $addaward->name=$request->name; 
        // $addaward->description=$request->description;        
        // $addaward->b_status=$request->button_status;
        $addaward->status=$request->status;
        $addaward->order=$request->order;
        $addaward->image=$image_url;
        $addaward->save();

        return back()->withFlashSuccess('Added Successfully');                      

    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Awards::all();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.awards.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    // ->addColumn('image', function($data){
                    //     $img = '<img src="'.url('files/awards/',$data->image).'" style="width: 100%">';
                     
                    //     return $img;
                    // })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {
        $awards = Awards::where('id',$id)->first();
        
        // dd($awards);              

        return view('backend.awards.edit',[
            'awards' => $awards         
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);

        $request->validate([
            'image'  => 'mimes:jpeg,png,jpg|max:25000',
            'order' => 'numeric'            
        ]);      
        
        if($request->file('image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/awards'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{            
            $detail = Awards::where('id',$request->hidden_id)->first();
            $image_url = $detail->image;            
        }    
        
        $upaward = new Awards;

        $upaward->name=$request->name; 
        // $upaward->description=$request->description;        
        // $upaward->b_status=$request->button_status;
        $upaward->status=$request->status;
        $upaward->order=$request->order;
        $upaward->image=$image_url;

        Awards::whereId($request->hidden_id)->update($upaward->toArray());
   
        return redirect()->route('admin.awards.index')->withFlashSuccess('Updated Successfully');                   

    }

    public function destroy($id)
    {        
        $data = Awards::findOrFail($id);
        $data->delete();   
    }



}

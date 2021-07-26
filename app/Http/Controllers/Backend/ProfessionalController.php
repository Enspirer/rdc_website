<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Professional;

class ProfessionalController extends Controller
{
    
    public function index()
    {
        return view('backend.professional.index');
    }

    public function store(Request $request)
    {        
        // dd($request);

        $request->validate([
            'image'  => 'mimes:jpeg,png,jpg|max:20000',
            'order' => 'numeric'            
        ]); 
    
        if($request->file('image'))
        {            
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/professional'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 
        // dd($image_url);

        $addpro = new Professional;
        
        $addpro->name=$request->name;
        $addpro->job_position=$request->job_position;
        $addpro->qualifications=$request->qualifications;
        $addpro->status=$request->status;
        $addpro->order=$request->order;
        $addpro->image=$image_url;
        $addpro->save();

        return back()->withFlashSuccess('Added Successfully');                      

    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Professional::all();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.professional.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    // ->addColumn('image', function($data){
                    //     $img = '<img src="'.url('files/professional/',$data->image).'" style="width: 100%">';
                     
                    //     return $img;
                    // })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {
        $professional = Professional::where('id',$id)->first();
        
        // dd($professional);              

        return view('backend.professional.edit',[
            'professional' => $professional         
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);

        $request->validate([
            'image'  => 'mimes:jpeg,png,jpg|max:20000',
            'order' => 'numeric'            
        ]);      
        
        if($request->file('image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/professional'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{            
            $detail = Professional::where('id',$request->hidden_id)->first();
            $image_url = $detail->image;            
        }    
        
        $uppro = new Professional;

        $uppro->name=$request->name;
        $uppro->job_position=$request->job_position;
        $uppro->qualifications=$request->qualifications;
        $uppro->status=$request->status;
        $uppro->order=$request->order;
        $uppro->image=$image_url;

        Professional::whereId($request->hidden_id)->update($uppro->toArray());
   
        return redirect()->route('admin.professional.index')->withFlashSuccess('Updated Successfully');                   

    }

    public function destroy($id)
    {        
        $data = Professional::findOrFail($id);
        $data->delete();   
    }


}

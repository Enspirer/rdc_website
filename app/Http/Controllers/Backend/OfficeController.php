<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Office;

class OfficeController extends Controller
{
    
    public function index()
    {
        return view('backend.office.index');
    }

    public function store(Request $request)
    {        
        // dd($request);

        $request->validate([
            'image'  => 'mimes:jpeg,png,jpg|max:20000|dimensions:width=700,height=738',
            'order' => 'numeric'            
        ]); 
    
        if($request->file('image'))
        {            
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/office'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 
        // dd($image_url);

        $addoffice = new Office;
        
        $addoffice->name=$request->name;
        $addoffice->job_position=$request->job_position;
        $addoffice->qualifications=$request->qualifications;
        $addoffice->status=$request->status;
        $addoffice->order=$request->order;
        $addoffice->image=$image_url;
        $addoffice->save();

        return back()->withFlashSuccess('Added Successfully');                      

    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Office::all();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.office.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    // ->addColumn('image', function($data){
                    //     $img = '<img src="'.url('files/office/',$data->image).'" style="width: 100%">';
                     
                    //     return $img;
                    // })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {
        $office = Office::where('id',$id)->first();
        
        // dd($office);              

        return view('backend.office.edit',[
            'office' => $office         
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);

        $request->validate([
            'image'  => 'mimes:jpeg,png,jpg|max:20000|dimensions:width=700,height=738',
            'order' => 'numeric'            
        ]);      
        
        if($request->file('image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/office'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{            
            $detail = Office::where('id',$request->hidden_id)->first();
            $image_url = $detail->image;            
        }    
        
        $upoffice = new Office;

        $upoffice->name=$request->name;
        $upoffice->job_position=$request->job_position;
        $upoffice->qualifications=$request->qualifications;
        $upoffice->status=$request->status;
        $upoffice->order=$request->order;
        $upoffice->image=$image_url;

        Office::whereId($request->hidden_id)->update($upoffice->toArray());
   
        return redirect()->route('admin.office.index')->withFlashSuccess('Updated Successfully');                   

    }

    public function destroy($id)
    {        
        $data = Office::findOrFail($id);
        $data->delete();   
    }

}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\PressRelease;

class PressReleaseController extends Controller
{
    public function index()
    {
        return view('backend.press.index');
    }

    public function create()
    {
        return view('backend.press.create');
    }

    public function store(Request $request)
    {        
        // dd($request);

        $request->validate([
            'image'  => 'mimes:jpeg,png,jpg|max:20000',
            'pdf'  => 'mimes:pdf|max:50000',
            'title' => 'max:13',
            'order' => 'numeric'            
        ]); 
    
        if($request->file('image'))
        {            
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/press'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 
        if($request->file('pdf'))
        {
            $preview_fileName2 = time().'_'.rand(1000,10000).'.'.$request->pdf->getClientOriginalExtension();
            $fullURLsPreviewFile2 = $request->pdf->move(public_path('files/pdf'), $preview_fileName2);
            $pdf_url = $preview_fileName2;
        }else{
            $pdf_url = null;
        }

        $addpress = new PressRelease;

        $addpress->title=$request->title; 
        $addpress->description=$request->description; 
        $addpress->status=$request->status;
        $addpress->order=$request->order;
        $addpress->image=$image_url;
        $addpress->pdf_upload=$pdf_url;
        $addpress->save();

        return redirect()->route('admin.press.index')->withFlashSuccess('Added Successfully');                      

    }

    public function GetDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = PressRelease::all();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.press.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    ->addColumn('image', function($data){
                        $img = '<img src="'.url('files/press',$data->image).'" style="width: 60%">';
                     
                        return $img;
                    })
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {
        $press = PressRelease::where('id',$id)->first();             

        return view('backend.press.edit',[
            'press' => $press         
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);

        $request->validate([
            'image'  => 'mimes:jpeg,png,jpg|max:20000',
            'pdf'  => 'mimes:pdf|max:50000',
            'title' => 'max:13',
            'order' => 'numeric'            
        ]);      
        
        if($request->file('image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/press'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{            
            $detail = PressRelease::where('id',$request->hidden_id)->first();
            $image_url = $detail->image;            
        }    
        if($request->file('pdf'))
        {
            $preview_fileName2 = time().'_'.rand(1000,10000).'.'.$request->pdf->getClientOriginalExtension();
            $fullURLsPreviewFile2 = $request->pdf->move(public_path('files/pdf'), $preview_fileName2);
            $pdf_url = $preview_fileName2;
        }else{
            $detail = PressRelease::where('id',$request->hidden_id)->first();
            $pdf_url = $detail->pdf_upload;
        } 
        
        $updatepress = new PressRelease;

        $updatepress->title=$request->title; 
        $updatepress->description=$request->description; 
        $updatepress->status=$request->status;
        $updatepress->order=$request->order;
        $updatepress->image=$image_url;
        $updatepress->pdf_upload=$pdf_url;

        PressRelease::whereId($request->hidden_id)->update($updatepress->toArray());
   
        return redirect()->route('admin.press.index')->withFlashSuccess('Updated Successfully');                   

    }

    public function destroy($id)
    {        
        $data = PressRelease::findOrFail($id);
        $data->delete();   
    }


}

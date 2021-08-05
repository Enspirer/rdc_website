<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\ProjectBanner;

class ProjectBannerController extends Controller
{
    
    public function index()
    {
        return view('backend.project_banner.index');
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
            $fullURLsPreviewFile = $request->image->move(public_path('files/project_banner'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 
        // dd($image_url);

        $addimage = new ProjectBanner;
        
        $addimage->order=$request->order;
        $addimage->image=$image_url;
        $addimage->save();

        return back()->withFlashSuccess('Added Successfully');                      

    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = ProjectBanner::all();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.project_banner.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    ->addColumn('image', function($data){
                        $img = '<img src="'.url('files/project_banner',$data->image).'" style="width: 100%">';
                     
                        return $img;
                    })
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {
        $project_banner = ProjectBanner::where('id',$id)->first();
        
        // dd($home);              

        return view('backend.project_banner.edit',[
            'project_banner' => $project_banner         
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
            $fullURLsPreviewFile = $request->image->move(public_path('files/project_banner'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{            
            $detail = ProjectBanner::where('id',$request->hidden_id)->first();
            $image_url = $detail->image;            
        }    
        
        $upimage = new ProjectBanner;

        $upimage->order=$request->order;
        $upimage->image=$image_url;

        ProjectBanner::whereId($request->hidden_id)->update($upimage->toArray());
   
        return redirect()->route('admin.project_banner.index')->withFlashSuccess('Updated Successfully');                   

    }

    public function destroy($id)
    {        
        $data = ProjectBanner::findOrFail($id);
        $data->delete();   
    }


}

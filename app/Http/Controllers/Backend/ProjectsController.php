<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Category;
use App\Models\Projects;
use App\Models\ProjectImages;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('backend.projects.index');
    }

    public function create()
    {
        $category = Category::where('status', '=', 'Enabled')->get();

        return view('backend.projects.create',[
            'category' => $category 
        ]);
    }

    public function store(Request $request)
    {        
        // dd($request);

        $request->validate([
            'order' => 'numeric'                
        ]);      
        
        if($request->file('feature_image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->feature_image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->feature_image->move(public_path('files/projects'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 


        $multiple_image = $request->file('image');
        $multiple_order = $request->image_order;

        // dd($multiple_order);
        $addproj = new Projects;

        $addproj->title=$request->title; 
        $addproj->category=$request->category;        
        $addproj->description=$request->description;
        $addproj->status=$request->status;
        $addproj->order=$request->order;
        $addproj->feature_image=$image_url;
        $addproj->save();

        foreach ($multiple_image as $key=> $single_image)            
            {
                // dd($single_image);
                if($single_image)
                {
                    $preview_fileName2 = time().'_'.rand(1000,10000).'.'.$single_image->getClientOriginalExtension();
                    $fullURLsPreviewFile2 = $single_image->move(public_path('files/projects'), $preview_fileName2);
                    $image_url2 = $preview_fileName2;
                }else{
                    $image_url2 = null;
                } 
            
                DB::table('project_images')->insert([
                    'project_id' => $addproj->id,
                    'image' => $image_url2,
                    'order' => $multiple_order[$key]
                ]);
            }           
        

        return back()->withFlashSuccess('Added Successfully');                      

    }



}

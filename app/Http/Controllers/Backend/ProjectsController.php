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
            'feature_image'  => 'mimes:jpeg,png,jpg|max:25000',
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
        

        // return back()->withFlashSuccess('Added Successfully');  
        return redirect()->route('admin.projects.index')->withFlashSuccess('Added Successfully');                    

    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Projects::all();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.projects.edit',$data->id).'" class="btn btn-secondary btn-sm" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit</a>';
                        $button1 = '<a href="'.route('admin.projects.editimage',$data->id).'" class="btn btn-info btn-sm" style="margin-right: 10px"><i class="far fa-images"></i> Images</a>';
                        $button2 = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button.$button1.$button2;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }


    public function edit($id)
    {
        $projects = Projects::where('id',$id)->first();
        $category = Category::all();
     
        $multiple = ProjectImages::where('project_id',$id)->get(); 
        // dd($multiple);              

        return view('backend.projects.edit',[
            'projects' => $projects,    
            'multiple' => $multiple,
            'category' => $category            
        ]);  
    }

    public function editimage($id)
    {
        $projects = Projects::where('id',$id)->first();
        $category = Category::all();
     
        $multiple = ProjectImages::where('project_id',$id)->orderBy('order', 'ASC')->get(); 
        // dd($multiple);              

        return view('backend.projects.edit_image',[
            'projects' => $projects,    
            'multiple' => $multiple,
            'category' => $category            
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);

        $request->validate([
            'feature_image'  => 'mimes:jpeg,png,jpg|max:25000',
            'order' => 'numeric'           
        ]);      
        
        if($request->file('feature_image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->feature_image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->feature_image->move(public_path('files/projects'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{            
            $detail = Projects::where('id',$request->hidden_id)->first();
            $image_url = $detail->feature_image;            
        }       

        
        $updateproj = new Projects;

        $updateproj->title=$request->title; 
        $updateproj->category=$request->category;        
        $updateproj->description=$request->description;
        $updateproj->status=$request->status;
        $updateproj->order=$request->order;
        $updateproj->feature_image=$image_url;

        Projects::whereId($request->hidden_id)->update($updateproj->toArray());
  
        // return back()->withFlashSuccess('Updated Successfully');  
        return redirect()->route('admin.projects.index')->withFlashSuccess('Updated Successfully');                   

    }

    public function updateimage(Request $request)
    {        
        // dd($request);

        $multiple_image = $request->file('image');
        $multiple_order = $request->image_order;
        // dd($multiple_order);
        
    
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
                    'project_id' => $request->hidden_id,
                    'image' => $image_url2,
                    'order' => $multiple_order[$key]
                ]);
            }    
        return back()->withFlashSuccess('Updated Successfully');  
        // return redirect()->route('admin.projects.index')->withFlashSuccess('Updated Successfully');                   

    }

   
    public function destroy($id)
    {        
        DB::table('project_images')->where('project_id', $id)->delete();
        DB::table('projects')->where('id', $id)->delete();   
    }

    public function delete($id)
    {        
        // DB::table('project_images')->where('id', $id)->delete(); 

        $data = ProjectImages::findOrFail($id);
        $data->delete();
    }





}

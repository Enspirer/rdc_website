<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\LifeAt;
use App\Models\LifeAtImages;

class LifeAtController extends Controller
{
    public function index()
    {
        return view('backend.life_at.index');
    }

    public function create()
    {
        return view('backend.life_at.create');
    }

    public function store(Request $request)
    {        
        // dd($request);

        $request->validate([
            'feature_image'  => 'mimes:jpeg,png,jpg|max:40000|dimensions:width=1920,height=1080',
            // 'image'  => 'mimes:jpeg,png,jpg|max:40000|dimensions:width=1920,height=1080',
            'order' => 'numeric'           
        ]);     
        
        if($request->file('feature_image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->feature_image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->feature_image->move(public_path('files/life_at'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 

        $multiple_image = $request->file('image');
        // dd($multiple_order);
        
        $addlife_at = new LifeAt;

        $addlife_at->title=$request->title;       
        $addlife_at->description=$request->description;
        $addlife_at->status=$request->status;
        $addlife_at->order=$request->order;
        $addlife_at->feature_image=$image_url;
        $addlife_at->save();  
        
        if($multiple_image == null){

        }else{

            foreach ($multiple_image as $key=> $single_image)            
            {
                // dd($single_image);
                if($single_image)
                {
                    $preview_fileName2 = time().'_'.rand(1000,10000).'.'.$single_image->getClientOriginalExtension();
                    $fullURLsPreviewFile2 = $single_image->move(public_path('files/life_at'), $preview_fileName2);
                    $image_url2 = $preview_fileName2;
                }else{
                    $image_url2 = null;
                } 
            
                DB::table('life_at_images')->insert([
                    'lifeat_id' => $addlife_at->id,
                    'image' => $image_url2
                ]);
            }  

        }

                 
        

        // return back()->withFlashSuccess('Added Successfully');  
        return redirect()->route('admin.lifeat.index')->withFlashSuccess('Added Successfully');                    

    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = LifeAt::all();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.lifeat.edit',$data->id).'" class="btn btn-secondary btn-sm" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit</a>';
                        $button1 = '<a href="'.route('admin.lifeat.editimage',$data->id).'" class="btn btn-info btn-sm" style="margin-right: 10px"><i class="far fa-images"></i> Images</a>';
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
        $lifeat = LifeAt::where('id',$id)->first();
     
        $multiple = LifeAtImages::where('lifeat_id',$id)->get(); 
        // dd($multiple);              

        return view('backend.life_at.edit',[
            'lifeat' => $lifeat,    
            'multiple' => $multiple           
        ]);  
    }

    public function editimage($id)
    {
        $lifeat = LifeAt::where('id',$id)->first();
     
        $multiple = LifeAtImages::where('lifeat_id',$id)->get(); 
        // dd($multiple);              

        return view('backend.life_at.edit_image',[
            'lifeat' => $lifeat,    
            'multiple' => $multiple           
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);

        $request->validate([
            'feature_image'  => 'mimes:jpeg,png,jpg|max:40000|dimensions:width=1920,height=1080',
            'order' => 'numeric'           
        ]);     
        
        if($request->file('feature_image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->feature_image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->feature_image->move(public_path('files/life_at'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{            
            $detail = LifeAt::where('id',$request->hidden_id)->first();
            $image_url = $detail->feature_image;            
        }       

        
        $uplifeat = new LifeAt;

        $uplifeat->title=$request->title;         
        $uplifeat->description=$request->description;
        $uplifeat->status=$request->status;
        $uplifeat->order=$request->order;
        $uplifeat->feature_image=$image_url;

        LifeAt::whereId($request->hidden_id)->update($uplifeat->toArray());
  
        // return back()->withFlashSuccess('Updated Successfully');  
        return redirect()->route('admin.lifeat.index')->withFlashSuccess('Updated Successfully');                   

    }

    public function updateimage(Request $request)
    {        
        // dd($request);

        $multiple_image = $request->file('image');
        // dd($multiple_order);
        
    
        foreach ($multiple_image as $key=> $single_image)            
            {
                // dd($single_image);
                if($single_image)
                {
                    $preview_fileName2 = time().'_'.rand(1000,10000).'.'.$single_image->getClientOriginalExtension();
                    $fullURLsPreviewFile2 = $single_image->move(public_path('files/life_at'), $preview_fileName2);
                    $image_url2 = $preview_fileName2;
                }else{
                    $image_url2 = null;
                } 
            
                DB::table('life_at_images')->insert([
                    'lifeat_id' => $request->hidden_id,
                    'image' => $image_url2
                ]);
            }    
        return back()->withFlashSuccess('Updated Successfully');  
        // return redirect()->route('admin.projects.index')->withFlashSuccess('Updated Successfully');                   

    }



    public function destroy($id)
    {        
        DB::table('life_at_images')->where('lifeat_id', $id)->delete();
        DB::table('life_ats')->where('id', $id)->delete();   
    }

    public function delete($id)
    {        
        // DB::table('project_images')->where('id', $id)->delete(); 

        $data = LifeAtImages::findOrFail($id);
        $data->delete();
    }



}

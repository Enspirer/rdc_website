<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Category;
use App\Models\Projects;

class CategoryController extends Controller
{
    public function index()
    {
        return view('backend.category.index');
    }

    public function store(Request $request)
    {        
        // dd($request);

        $request->validate([
            'order' => 'numeric'                
        ]);   

        $data = Category::where('name',$request->name)->first(); 
        // dd($data);
        if( $data==null ){

            $addcat = new Category;

            $addcat->name=$request->name;        
            $addcat->description=$request->description;
            $addcat->status=$request->status;
            $addcat->order=$request->order;

            $addcat->save();
            return back()->withFlashSuccess('Added Successfully'); 
        }else{
            return back()->withErrors('You Already Added This Category');
        }   
                      

    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Category::all();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm"><i class="fas fa-edit"></i> Edit</button>';
                        $button .= '&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    public function update(Request $request)
    {    
        $request->validate([
            'order' => 'numeric'                
        ]); 

        $data = Category::where('name',$request->name)->first(); 
        // dd($data);
        if( $data==null ){

            $updatecat = new Category;
            $updatecat->name=$request->name;        
            $updatecat->description=$request->description;
            $updatecat->status=$request->status;
            $updatecat->order=$request->order;  
            
            $category_details = Category::whereId($request->hidden_id)->first();

            $projects = DB::table('projects')->where('category',$category_details->name)->update(array('category' => $request->name));
    
            Category::whereId($request->hidden_id)->update($updatecat->toArray());

            

            return back()->withFlashSuccess('Updated Successfully'); 
        }else{
            return back()->withErrors('You Already Added This Category');
        }        
                 

    }

    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = Category::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }

    public function destroy($id)
    {
        Category::where('id', $id)->delete(); 
    }


}

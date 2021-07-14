<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Category;

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
        
        $addcat = new Category;

        $addcat->name=$request->name;        
        $addcat->description=$request->description;
        $addcat->status=$request->status;
        $addcat->order=$request->order;

        $addcat->save();

        return back()->withFlashSuccess('Added Successfully');                      

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

        $updatecat = new Category;
        $updatecat->name=$request->name;        
        $updatecat->description=$request->description;
        $updatecat->status=$request->status;
        $updatecat->order=$request->order;
   
        Category::whereId($request->hidden_id)->update($updatecat->toArray());

        return back()->withFlashSuccess('Updated Successfully');                      

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

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
        $addaward->description=$request->description;        
        $addaward->b_status=$request->button_status;
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
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm"><i class="fas fa-edit"></i> Edit</button>';
                        $button .= '&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }



}

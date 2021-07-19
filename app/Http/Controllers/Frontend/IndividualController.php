<?php

namespace App\Http\Controllers\Frontend;
use DB;
use App\Models\Projects;
use App\Models\ProjectImages;

/**
 * Class HomeController.
 */
class IndividualController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($id)
    {

        $projimages = ProjectImages::where('project_id',$id)->get();
        // dd($projimages);
        $proj = Projects::where('id',$id)->first();

        return view('frontend.individual',[
            'projimages' => $projimages,
            'proj' => $proj
        ]);
    }
}

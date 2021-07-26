<?php

namespace App\Http\Controllers\Frontend;
use DB;
use App\Models\Professional;
use App\Models\Office;

/**
 * Class HomeController.
 */
class PeopleController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $professionals = DB::table('professionals')->orderBy('order', 'ASC')->where('status', '=', 'Enabled')->get();
        $offices = DB::table('offices')->orderBy('order', 'ASC')->where('status', '=', 'Enabled')->get();

        return view('frontend.people',[
            'professionals'=> $professionals,
            'offices'=> $offices
        ]);
    }
}

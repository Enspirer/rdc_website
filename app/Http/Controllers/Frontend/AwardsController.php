<?php

namespace App\Http\Controllers\Frontend;
use DB;
use App\Models\Awards;
/**
 * Class HomeController.
 */
class AwardsController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $awards = DB::table('awards')->orderBy('order', 'ASC')->where('status', '=', 'Enabled')->get();
        // dd($category);

        return view('frontend.awards',[
            'awards' => $awards
        ]);
    }
}

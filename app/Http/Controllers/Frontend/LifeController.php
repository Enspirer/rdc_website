<?php

namespace App\Http\Controllers\Frontend;
use DB;
use App\Models\LifeAt;
use App\Models\LifeAtImages;

/**
 * Class HomeController.
 */
class LifeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $lifeat = DB::table('life_ats')->orderBy('order', 'DESC')->where('status', '=', 'Enabled')->get();
        // dd($lifeat);

        return view('frontend.life',[
            'lifeat' => $lifeat
        ]);
    }
}

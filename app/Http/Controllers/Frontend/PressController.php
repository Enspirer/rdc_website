<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Models\PressRelease;
use DB;

/**
 * Class HomeController.
 */
class PressController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $pressrelease = DB::table('press_releases')->orderBy('order', 'DESC')->where('status', '=', 'Enabled')->get();

        return view('frontend.press',[
            'pressrelease' => $pressrelease
        ]);
    }
}

<?php

namespace App\Http\Controllers\Frontend;
use DB;
use App\Models\LifeAt;
use App\Models\LifeAtImages;

/**
 * Class HomeController.
 */
class TripController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($id)
    {

        $datas = LifeAtImages::where('lifeat_id',$id)->get();
        $lifeat = LifeAt::where('id',$id)->first();
        // dd($lifeat);

        // $tenants_id = [];
        // foreach($data as $data_attachment){
        //     array_push($tenants_id,$data_attachment->tenant_id);
        // }
        // // dd($tenants_id);

        // $tenants = Tenant::whereIn('id',$tenants_id)->get();


        return view('frontend.trip-individual',[
            'datas' => $datas,
            'lifeat' => $lifeat
        ]);
    }
}

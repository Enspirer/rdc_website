<?php

namespace App\Http\Controllers\Backend;
use App\Models\Projects;
use App\Models\Awards;
use App\Models\LifeAt;
use App\Models\ContactUs;

/**
 * Class DashboardController.
 */
class DashboardController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $lifeat = LifeAt::all()->count();
        $contactus = ContactUs::all()->where('status','==','Pending')->count();
        $projects = Projects::all()->count();
        $awards = Awards::all()->count();

        return view('backend.dashboard',[
            'lifeat' => $lifeat,
            'contactus' => $contactus,
            'projects' => $projects,
            'awards' => $awards
        ]);
    }
}

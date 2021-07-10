<?php

namespace App\Http\Controllers\Frontend;

/**
 * Class HomeController.
 */
class ProjectsController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.projects');
    }
}

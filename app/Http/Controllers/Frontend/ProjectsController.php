<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Projects;
use DB;
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
        $banners = DB::table('project_banners')->orderBy('order', 'ASC')->get();
        // dd($banners);
        $category = DB::table('categories')->orderBy('order', 'ASC')->where('status', '=', 'Enabled')->get();
        // dd($category);
        $projects = DB::table('projects')->orderBy('order', 'ASC')->where('status', '=', 'Enabled')->get();
        // dd($projects);


        return view('frontend.projects',[
            'category' => $category,
            'projects' => $projects,
            'banners' => $banners
        ]);
    }
}

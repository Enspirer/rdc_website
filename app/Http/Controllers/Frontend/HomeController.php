<?php

namespace App\Http\Controllers\Frontend;
use DB;
/**
 * Class HomeController.
 */
class HomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        // $projects = DB::table('projects')->orderBy('order', 'ASC')->where('status', '=', 'Enabled')->where('other', '=', 'Enabled')->get();
        // dd($projects);
        // $projects = DB::table('projects')->select('title', DB::raw('count(*) as total'))->groupBy('title')->orderBy('order', 'ASC')->where('status', '=', 'Enabled')->where('other', '=', 'Enabled')->get();
        // dd($projects);

        $projects = DB::table('projects')->orderBy('order', 'ASC')->where('status', '=', 'Enabled')->where('other', '=', 'Enabled')->get();
        // dd($projects);

        $final_array = [];
        foreach($projects as $key => $proj){

            $item_group = [
                
                'id' => $proj->id,
                'title' => $proj->title,
                'feature_image' => $proj->feature_image,
                'location' => $proj->location

            ];

            array_push($final_array,$item_group);
        }

        $self = self::sectionArray($final_array,3);
        dd($self);

        return view('frontend.index',[
            'self' => $self
        ]);
    }

    static function sectionArray($array, $step)
        {
            $sectioned = array();
            $k = 0;

            for ( $i=0;$i < count($array); $i++ ) {
                if ( !($i % $step) ) {
                $k++;
                }
                $sectioned[$i][] = $array[$i];
            }
            return $sectioned;
        }





}

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
        $home_image = DB::table('homes')->orderBy('order', 'ASC')->get();
        // dd($home_image);

        $home_publish = DB::table('projects')->where('status', '=', 'Enabled')->where('other', '=', 'Enabled')->get();
        // dd($home_publish);

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


        return view('frontend.index',[
            'self' => $self,
            'home_publish' => $home_publish,
            'home_image' => $home_image
        ]);
    }

    static function sectionArray($array, $step)
        {
            $sectioned = array();
            $k = -1;

            for ( $i=0;$i < count($array); $i++ ) {

                if ( !($i % $step) ) {
                $k++;
                }
                $sectioned[$k][] = $array[$i];
            }
            return $sectioned;
        }





}

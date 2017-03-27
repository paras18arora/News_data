<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class TotalnewsController extends Controller
{
    public function search()
    {
        $news=DB::table('crawled_news')->get();
        $data=array();
        $i=0;
        foreach ($news as $key) {

        	$data1=array("date"=>$key->date,"title"=>$key->title,"keywords"=>$key->keywords,"city"=>$key->city,"link"=>$key->link);
        	array_push($data,$i,$data1);
        	$i++;
        }
        print_r(json_encode($data));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;


class analysisController extends Controller
{
    public function display(Request $req)
    {
        $category=$req['Categories'];
        $graphtype=$req['Graphtype'];
    	$startdate=$req['startdate'];
    	$enddate=$req['enddate'];
        $startdate1=$req['startdate1'];
        $enddate1=$req['enddate1'];        
        if ($startdate1) {
            if($category=="Others")
                $total_records1=DB::table('crawled_news')->where('keywords', 'not like', '%'."murder".'%')->where('keywords', 'not like', '%'."rape".'%')->where('newDate', '>=' , $startdate1)->where('newDate', '<=' ,  $enddate1)->get();
            else if($category!="All Crimes")
           $total_records1=DB::table('crawled_news')->where('keywords', 'LIKE', '%'.$category.'%')->where('newDate', '>=' , $startdate1)->where('newDate', '<=' ,  $enddate1)->get();
            else
                $total_records1=DB::table('crawled_news')->where('newDate', '>=' , $startdate1)->where('newDate', '<=' ,  $enddate1)->get();
        $total_events1=DB::table('sports_events')->where('startdate', '>=' , $startdate1)->where('startdate', '<=' ,  $enddate1)->get(); 
        }
       else
        {
            $total_records1="";
            $total_events1="";
           $startdate1="";
           $enddate1="";
        }
        
        if($category=="Others")
                $total_records=DB::table('crawled_news')->where('keywords', 'not like', '%'."murder".'%')->where('keywords', 'not like', '%'."rape".'%')->where('newDate', '>=' , $startdate)->where('newDate', '<=' ,  $enddate)->get();
        else if($category!="All Crimes")
    	$total_records=DB::table('crawled_news')->where('keywords', 'LIKE', '%'.$category.'%')->where('newDate', '>=' , $startdate)->where('newDate', '<=' ,  $enddate)->get();
        
        else
            $total_records=DB::table('crawled_news')->where('newDate', '>=' , $startdate)->where('newDate', '<=' ,  $enddate)->get();
    	$total_events=DB::table('sports_events')->where('startdate', '>=' , $startdate)->where('startdate', '<=' ,  $enddate)->get();

    
       

    	
    	return view('analytics')->with('total_records',$total_records)->with('total_records1',$total_records1)->with('total_events1',$total_events1)->with('startdate',$startdate)->with('enddate',$enddate)->with('total_events',$total_events)->with('startdate1',$startdate1)->with('enddate1',$enddate1)->with('category',$category)->with('graphtype',$graphtype);
    }
}

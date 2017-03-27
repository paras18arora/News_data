<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class contentController extends Controller
{

    public function search()
    {
    	include('ganon.php');
    	$link = "http://indianexpress.com/section/india/crime/feed/";
      //  ini_set('max_execution_time', 10000);
        $curl = curl_init();  // for accessing each article content based on the link we get from above result
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $link,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'    
            ));

		$xmldata = curl_exec($curl);  
 		curl_close($curl); 
 		$data=array();
 		$xml=simplexml_load_string($xmldata) or die("Error: Cannot create object");
        for($i=125;$i<count($xml->channel->item);$i++)
        {
        	$data=$this->get_data($xml->channel->item[$i]->link);
        	$id1 =  DB::table('crawled_news')->insertGetId(
            array('date' => $xml->channel->item[$i]->pubDate, 'title' => $xml->channel->item[$i]->title, 'keywords' => $data[1]['keywords'],'link' => $xml->channel->item[$i]->link,"city"=> $data[0]['city'])
           );
        }

        print_r($data[0]['city']);

        return $xml;

    
    }
    public function display()
    {
       
        $news=DB::table('crawled_news')->get();
        $data=array();
       
        foreach ($news as $key) {

           $category="";
            
            if (strpos($key->keywords,"murder") !== false)
                 $category="murder";
            else if (strpos($key->keywords,"rape") !== false)
                 $category="rape";
            else 
                 $category="others";
            
            $data1=array("date"=>$key->date,"title"=>$key->title,"keywords"=>$key->keywords,"city"=>$key->city,"link"=>$key->link,"category"=>$category);
            array_push($data,$data1);
            
        }
       
        return view('master')->with("data",$data);

    
    }
    public function get_data($url)
    {
       

        $html = file_get_dom($url);
        $content1 = array();
        foreach ($html('div.editor strong') as $city) 
        {
            $data1=array("city"=>$city->getInnerText());
            break;
        }
        foreach ($html('meta') as $keyword) 
        {
        	if($keyword->name=="keywords")
               $data2=array("keywords"=>$keyword->content);
        
        }
        array_push($content1,$data1,$data2);
        return $content1;


    }

}

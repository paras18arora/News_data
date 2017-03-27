<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class HandlenewsController extends Controller
{
	public function search()
	{
        return view('mainpage');
    }
}

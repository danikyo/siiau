<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TestController extends Controller
{
	$flights = App\Flight::all();

	foreach ($flights as $flight) {
	    echo $flight->name;
	}

    public function index()
    {
        return view('test');
    }
}

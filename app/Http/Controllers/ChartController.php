<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChartController extends Controller
{
    public function index()
    {
    	return view('chart.index');
    }

    public function rader()
    {
    	return view('chart.rader');
    }
}

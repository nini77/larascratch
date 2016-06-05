<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VueController extends Controller
{
    public function dataBind()
    {
    	return view('vue.dataBind');
    }

	public function vueShow()
	{
		return view('vue.show');	
	}

	public function eventHandling()
	{
		return view('vue.eventHandling');	
	}

	public function computedProperties()
	{
		return view('vue.computedProperties');
	}
	public function subscriptionPlanExercise()
	{
		return view('vue.subscriptionPlanExercise');
		
	}
	public function renderingWithLists()
	{
		return view('vue.renderingWithLists');
	}


}




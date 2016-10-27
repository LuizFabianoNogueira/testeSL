<?php

namespace App\Http\Controllers;

class StateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get($id)
    {
    	$states = \App\Models\State::where('id', $id)->get();
    	$country = \App\Models\Country::find($states[0]->country_id);
    	return view('admin.state.list', [
    		'states' => $states,
    		'country' => $country
		]);
    }

    public function list($country = null)
    {
    	$country = ($country > 0 ? $country : 30);
    	return view('admin.state.list', [
    		'states' => \App\Models\State::where('country_id', $country)->get(),
    		'country' => \App\Models\Country::find($country)
		]);
    }
}

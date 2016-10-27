<?php

namespace App\Http\Controllers;

class countryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list($id=null)
    {
    	return view('admin.country.list', [
    		'countries' => ($id ? \App\Models\Country::where('id', $id)->get() : \App\Models\Country::get() )
		]);
    }
}

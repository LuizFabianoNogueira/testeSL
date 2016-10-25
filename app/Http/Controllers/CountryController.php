<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests;

class countryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
    	return view('admin.country.list', ['countries' => Country::get()]);
    }
}

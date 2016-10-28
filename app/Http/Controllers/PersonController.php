<?php

namespace App\Http\Controllers;

use Validator;
use Redirect;

class PersonController extends Controller
{
    public function salvar(\Illuminate\Http\Request $request)
    {
    	$inputs = $request->all();
    	#recaptcha
    	$validator = Validator::make($inputs, ['g-recaptcha-response' => 'required']);
    	if ($validator->fails())
    		return Redirect::back()->withErrors($validator)->withInput();

    	$this->ValidateReCaptcha($inputs);
    	 	



    	//$validator = $this->validator($request->all());
    	if ($validator->fails()) {
            return Redirect::back()
                        ->withErrors($validator)
                        ->withInput();
        }

        dd('passo...');
    }

    protected function validator(array $data)
    {
    	$data['recaptcha'] = $this->ValidateReCaptcha($data);
        $validator = Validator::make($data,
            [
            	'recaptcha'				=> 'required|boolean',
                'name'            		=> 'required',
                'last_name'             => 'required'
            ],
            [
            	'recaptcha.required'   	=> 'Informe ao sistema que você não é um robo clicando no campo informado!',
            	'recaptcha.boolean'   	=> 'Informe ao sistema que você não é um robo clicando no campo informado!',
                'first_name.required'   => 'First Name is required',
                'last_name.required'    => 'Last Name is required',
            ]
        );

        return $validator;
    }

}

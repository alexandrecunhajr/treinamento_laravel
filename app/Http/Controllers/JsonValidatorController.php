<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class JsonValidatorController extends Controller
{
	public function teste(){
		  return  App\resources\views\curso-schema;
		die();
       //return json_decode(file_get_contents('curso-schema.json'));
      return  View::make('curso-schema')->render();
    }
}

<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class TestController extends Controller{

	public function test($deneme=null){


		return array("deneme" => $deneme);
	}

} 
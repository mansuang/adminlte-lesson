<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function change($lang)
    {
		session(['lang' => $lang]);   
		return back();	
    }
}

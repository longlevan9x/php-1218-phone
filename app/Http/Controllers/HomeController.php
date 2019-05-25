<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
class HomeController extends Controller
{
    public function index() {
    	$phones = Phone::paginate(8);

    	return view('home.home', ['phones' => $phones]);
    }
}

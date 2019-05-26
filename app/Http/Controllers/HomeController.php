<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
class HomeController extends Controller
{
    public function index() {
    	$phones = Phone::paginate(6);

    	return view('home.home', ['phones' => $phones]);
    }

    public function detail($slug) {
    	$slug_array = explode("-", $slug);
    	$id = end($slug_array);

    	$phone = Phone::findOrFail($id);

    	$producer_id = $phone->producer_id;
    	$related_phones = Phone::where('producer_id', $producer_id)->limit(6)->latest()->get();

    	$data = array(
    		'phone' => $phone,
    		'id1' => $id,
    		'slug' => $slug,
    		'related' => $related_phones
    	);
    	return view('home.detail', $data);
    }
}

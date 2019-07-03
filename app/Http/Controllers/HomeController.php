<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $phones = Phone::query()->paginate(2);
        return view('home.home', ['phones' => $phones]);
    }

    public function detail($slug)
    {
        $slug_arr = explode("-", $slug);
        $id = end($slug_arr);
        $related = Phone::query()->limit(8)->get();
        $phone = Phone::findOrFail($id);
        return view('home.detail', ['phone' => $phone, "related" => $related]);
    }
}

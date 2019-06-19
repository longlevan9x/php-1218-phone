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
}

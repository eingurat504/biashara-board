<?php

namespace App\Http\Controllers;


use App\Models\CardCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cardcategories = CardCategory::all();

        return view('home',[
            'cardcategories' => $cardcategories 
        ]);
    }
}

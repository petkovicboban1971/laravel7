<?php

namespace App\Http\Controllers;
use App\Sample_data;

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
        return view('home');
    }

    public function home()
    {
        $danasnji_rodjendani = [];
        $key = 0;
        $rodjendani = Sample_data::all();
        foreach ($rodjendani as $rodjendan) {
            if (date_format(date_create($rodjendan->birth_date), "m-d") == date("m-d"))
            {
                $danasnji_rodjendani[$key] = $rodjendan;
                $key++;
            }
        }

        return view('sample_data')->with(['rodjendani' => $danasnji_rodjendani]);
    }
}

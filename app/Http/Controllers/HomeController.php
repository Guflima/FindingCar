<?php

namespace App\Http\Controllers;

use App\eventos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $eventos = eventos::orderBy('created_at')->paginate(4);
        $existAnEvent = count($eventos);
        if($existAnEvent){
            $existAnEvent = true;
        }else{
            $existAnEvent = null;
        }
        return view('sistema.home',['eventos' => $eventos, 'existAnEvent' => $existAnEvent]);
    }
}

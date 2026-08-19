<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*public function welcome(Request $request)
    {
        return redirect()->route('welcome')->with('sucesso', 'Deplou concluído!');
    }*/

    public function welcome() {
        return view('welcome');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        $name['first'] = 'Oleg';
        $name['sur'] = 'Nesterov';
        $people = ['Oleg', 'Kat', 'Someone else'];
        return View('pages.about', $name, compact('people'));
    }
    public function contact(){
        return view('pages.contact');
    }
}

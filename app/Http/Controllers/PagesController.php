<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome Home Pages!";
        return view('pages.index')-> with('title', $title);
    }

    public function about(){
        $title = "Welcome Home Pages!";
        return view('pages.about')-> with('title', $title);
    }

    public function contacct(){
        $data = array(
            'title' => 'Information',
            'infos' => [
                'email' => 'rady.y@gmail.com',
                'phone' => '099 88 77 66 55',
                'position' => 'Master',
                'age' => '18',
            ]
            );
            return view('pages.contact')-> with($data);
    }

    // public function about(){
    //     return view ('pages.about');
    // }

    // public function contacct(){
    //     return view ('pages.contacct');
    // }
}

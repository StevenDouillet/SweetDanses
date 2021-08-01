<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $title = 'Accueil';
        return view('pages.home')->with('title', $title);
    }
    public function disciplines() {
        $title = 'Nos danses';
        return view('pages.disciplines')->with('title', $title);
    }
    public function planning() {
        $title = 'Le planning';
        return view('pages.planning')->with('title', $title);
    }
    public function prices() {
        $title = 'Les tarifs';
        return view('pages.prices')->with('title', $title);
    }
}

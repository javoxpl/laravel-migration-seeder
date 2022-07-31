<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function trains() {
        $trains = 'Sono la pagine dei treni';
        $listTrains = \App\Train::all();
        return view('trains', compact('listTrains', 'trains'));
    }
}

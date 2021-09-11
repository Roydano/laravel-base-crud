<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class HomeController extends Controller
{
    public function index(){
        $comics = Comic::all();

        return view('welcome', compact('comics'));
    }

    public function show($id){
        $dettaglio = Comic::where('id', $id)->first();
        return view('detail', compact('dettaglio'));

    }
}

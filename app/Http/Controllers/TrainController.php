<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = trains::all();

        return view('trains', compact('trains'));
    }
}

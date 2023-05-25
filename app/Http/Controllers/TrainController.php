<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class TrainController extends Controller
{

    public function index()
    {
        $today = now()->format('Y-m-d');
        $trains = Train::where('giorno_partenza', '>=', $today)->get();
        return view('home', compact('trains'));
    }


}
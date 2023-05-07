<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index() {

        // $trains = Train::all();
        $trains = Train::whereDate('departure_time', Carbon::today())->get();

        return view('home', compact('trains'));
    }
}

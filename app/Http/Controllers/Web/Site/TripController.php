<?php

namespace App\Http\Controllers\Web\Site;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $trips = Trip::all();
        return view('site.pages.trip', compact('trips'));
    }
}

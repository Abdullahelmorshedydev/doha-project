<?php

namespace App\Http\Controllers\Web\Site;

use App\Http\Controllers\Controller;
use App\Models\Siminar;
use Illuminate\Http\Request;

class SiminarController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $siminars = Siminar::all();
        return view('site.pages.siminar', compact('siminars'));
    }
}

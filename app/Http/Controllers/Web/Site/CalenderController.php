<?php

namespace App\Http\Controllers\Web\Site;

use App\Http\Controllers\Controller;
use App\Models\Calender;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    public function index()
    {
        return view('site.pages.calender');
    }

    public function store(Request $request)
    {
        Calender::create($request->all());
        return redirect()->route('calender.index');
    }
}

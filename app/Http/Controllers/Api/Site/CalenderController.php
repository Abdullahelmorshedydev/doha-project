<?php

namespace App\Http\Controllers\Api\Site;

use App\Http\Controllers\Controller;
use App\Models\Calender;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    public function index()
    {
        $calenders = Calender::where('user_id', auth()->user()->id)->get();
        return response()->json($calenders->toArray());
    }
}

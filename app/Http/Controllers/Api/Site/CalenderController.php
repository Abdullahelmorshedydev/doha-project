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
        $calendarEvents = $calenders->map(function ($event) {
            return [
                'id' => $event->id,
                'name' => $event->name,
                'date' => $event->date,
                'description' => $event->description,
                'type' => $event->type,
            ];
        });
        return response()->json($calendarEvents);
    }
}

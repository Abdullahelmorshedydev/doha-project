<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\Trip\TripStoreRequest;
use App\Http\Requests\Web\Admin\Trip\TripUpdateRequest;
use App\Models\Event;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::paginate();
        return view('admin.pages.trip.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::all();
        return view('admin.pages.trip.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TripStoreRequest $request)
    {
        Trip::create($request->validated());
        return redirect()->route('admin.trips.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        $events = Event::all();
        return view('admin.pages.trip.edit', compact('events', 'trip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TripUpdateRequest $request, Trip $trip)
    {
        $trip->update($request->validated());
        return redirect()->route('admin.trips.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        $trip->delete();
        return redirect()->route('admin.trips.index');
    }
}

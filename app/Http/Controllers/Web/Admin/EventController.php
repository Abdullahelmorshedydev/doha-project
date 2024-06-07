<?php

namespace App\Http\Controllers\Web\Admin;

use App\Enums\EventTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\Event\EventStoreRequest;
use App\Http\Requests\Web\Admin\Event\EventUpdateRequest;
use App\Models\Event;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;

class EventController extends Controller
{
    use FilesTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::paginate();
        return view('admin.pages.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventStoreRequest $request)
    {
        $event = Event::create($request->validated());
        $event->image()->create([
            'image' => FilesTrait::store($request->image, Event::IMG_URL),
        ]);
        return redirect()->route('admin.events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('admin.pages.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('admin.pages.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventUpdateRequest $request, Event $event)
    {
        $event->update($request->validated());
        if (isset($request->image)) {
            if (isset($event->image)) {
                FilesTrait::delete($event->image->image);
            }
            $event->image()->update([
                'image' => FilesTrait::store($request->image, Event::IMG_URL),
            ]);
        }
        return redirect()->route('admin.events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        FilesTrait::delete($event->image->image);
        $event->image()->delete();
        $event->delete();
        return back();
    }
}

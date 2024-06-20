<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\Siminar\SiminarStoreRequest;
use App\Http\Requests\Web\Admin\Siminar\SiminarUpdateRequest;
use App\Models\Siminar;
use Illuminate\Http\Request;

class SiminarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siminars = Siminar::paginate();
        return view('admin.pages.siminar.index', compact('siminars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.siminar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SiminarStoreRequest $request)
    {
        Siminar::create($request->validated());
        return redirect()->route('admin.siminars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siminar $siminar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siminar $siminar)
    {
        return view('admin.pages.siminar.edit', compact('siminar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SiminarUpdateRequest $request, Siminar $siminar)
    {
        $siminar->update($request->validated());
        return redirect()->route('admin.siminars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siminar $siminar)
    {
        $siminar->delete();
        return redirect()->route('admin.siminars.index');
    }
}

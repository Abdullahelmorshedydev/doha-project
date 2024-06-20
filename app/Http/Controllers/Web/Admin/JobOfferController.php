<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\JobOffer\JobOfferStoreRequest;
use App\Http\Requests\Web\Admin\JobOffer\JobOfferUpdateRequest;
use App\Models\JobOffer;
use Illuminate\Http\Request;

class JobOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobOffers = JobOffer::paginate();
        return view('admin.pages.jobOffer.index', compact('jobOffers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.jobOffer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobOfferStoreRequest $request)
    {
        JobOffer::create($request->validated());
        return redirect()->route('admin.job-offers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobOffer $jobOffer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobOffer $jobOffer)
    {
        return view('admin.pages.jobOffer.edit', compact('jobOffer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobOfferUpdateRequest $request, JobOffer $jobOffer)
    {
        $jobOffer->update($request->validated());
        return redirect()->route('admin.job-offers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobOffer $jobOffer)
    {
        $jobOffer->delete();
        return redirect()->route('admin.job-offers.index');
    }
}

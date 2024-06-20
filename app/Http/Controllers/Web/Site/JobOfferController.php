<?php

namespace App\Http\Controllers\Web\Site;

use App\Http\Controllers\Controller;
use App\Models\JobOffer;
use Illuminate\Http\Request;

class JobOfferController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $jobOffers = JobOffer::all();
        return view('site.pages.joboffers', compact('jobOffers'));
    }
}

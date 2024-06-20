<?php

namespace App\Http\Controllers\Web\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('site.pages.aboutus.index');
    }
}

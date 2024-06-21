<?php

namespace App\Http\Controllers\Web\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function __invoke()
    {
        return view('site.pages.aboutus.feedback');
    }
}

<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::paginate();
        return view('admin.pages.contact.index', compact('contacts'));
    }
}

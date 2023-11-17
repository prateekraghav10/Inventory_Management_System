<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; // Import the View facade

class ContactController extends Controller
{
    // This is the method that will be called when you access /add-contact
    public function create()
    {
        return view('add_contact'); // Return the view named 'addcontact.blade.php'
    }
}

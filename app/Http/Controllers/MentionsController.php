<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentionsController extends Controller
{
    function index() {
        return view('mentions');
    }
}

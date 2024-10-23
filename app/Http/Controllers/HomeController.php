<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $title ='Acceuil'; 
        $message = 'Bonjour Laravel!';

        // charge la page home.blade.php
        return view('home',  [
            'message' => $message,
            'title' => $title,
        ]);
    }
}
 
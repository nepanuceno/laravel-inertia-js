<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $user = "Paulo Roberto Torres";
        return Inertia::render('Home', compact('user'));
    }

    public function about()
    {
        return Inertia::render('About');
    }
}

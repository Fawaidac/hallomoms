<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $article = Artikel::orderByDesc('id')->take(3)->get();
        $team = Team::orderByDesc('id')->get();
        return view('layouts.pages.home', compact('article', 'team'));
    }
}

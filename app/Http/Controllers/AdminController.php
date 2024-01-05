<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Breastfeeding;
use App\Models\Feedback;
use App\Models\Pregnant;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $team = Team::count();
        $article = Artikel::count();
        $feedback = Feedback::count();
        $p = Pregnant::count();
        $b = Breastfeeding::count();
        $services = $p + $b;
        return view('layouts.pages.admin.dashboard', compact('team', 'article', 'feedback', 'services'));
    }
}

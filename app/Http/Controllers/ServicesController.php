<?php

namespace App\Http\Controllers;

use App\Models\Breastfeeding;
use App\Models\Pregnant;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('layouts.pages.services');
    }

    public function pregnant()
    {
        $pregnant = Pregnant::orderByDesc('id')->get();

        return view('layouts.pages.pregnant', compact('pregnant'));
    }

    public function breastfeeding()
    {
        $bf = Breastfeeding::orderByDesc('id')->get();

        return view('layouts.pages.breastfeeding', compact('bf'));
    }
}

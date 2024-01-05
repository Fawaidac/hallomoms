<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $data = Feedback::orderByDesc('id')->get();

        return view('layouts.pages.admin.feedback', compact('data'));
    }

    public function destroy($id)
    {
        $art = Feedback::findOrFail($id);
        $art->delete();

        return back()->with('message', 'Feedback Deleted successfully');
    }
}

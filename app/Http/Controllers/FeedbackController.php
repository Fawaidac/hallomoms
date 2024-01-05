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

    public function add(Request $request)
    {
        $validate =  $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        Feedback::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'message' => $validate['message'],
        ]);

        return redirect()->route('home')->with('message', 'Send feedback Successfully');
    }
    public function destroy($id)
    {
        $art = Feedback::findOrFail($id);
        $art->delete();

        return back()->with('message', 'Feedback Deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $data = Team::orderByDesc('id')->get();

        return view('layouts.pages.admin.team', compact('data'));
    }

    public function add(Request $request)
    {
        $validate =  $request->validate([
            'name' => 'required',
            'about' => 'required',
        ]);

        Team::create([
            'name' => $validate['name'],
            'about' => $validate['about'],
        ]);

        return redirect()->route('admin.team')->with('message', 'Add Team Successfully');
    }

    public function edit(Request $request, $id)
    {
        $art = Team::findOrFail($id);

        $validate =  $request->validate([
            'name' => 'required',
            'about' => 'required',
        ]);

        $art->update([
            'name' => $validate['name'],
            'about' => $validate['about'],
        ]);

        return redirect()->route('admin.team')->with('message', 'Update Team Successfully');
    }

    public function destroy($id)
    {
        $art = Team::findOrFail($id);
        $art->delete();

        return back()->with('message', 'Team Deleted successfully');
    }
}

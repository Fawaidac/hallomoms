<?php

namespace App\Http\Controllers;

use App\Models\Pregnant;
use Illuminate\Http\Request;

class PregnantController extends Controller
{
    public function view()
    {
        $data = Pregnant::orderByDesc('id')->get();

        return view('layouts.pages.admin.pregnant', compact('data'));
    }
    public function add(Request $request)
    {
        $validate =  $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required|url',
        ]);

        Pregnant::create([
            'title' => $validate['title'],
            'description' => $validate['description'],
            'link' => $validate['link'],
        ]);

        return redirect()->route('admin.pregnant')->with('message', 'Add Data Successfully');
    }

    public function edit(Request $request, $id)
    {
        $art = Pregnant::findOrFail($id);

        $validate =  $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required|url',
        ]);

        $art->update([
            'title' => $validate['title'],
            'description' => $validate['description'],
            'link' => $validate['link'],
        ]);

        return redirect()->route('admin.pregnant')->with('message', 'Update Successfully');
    }

    public function destroy($id)
    {
        $art = Pregnant::findOrFail($id);
        $art->delete();

        return back()->with('message', 'Deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Breastfeeding;
use Illuminate\Http\Request;

class BreastfeedingController extends Controller
{
    public function view()
    {
        $data = Breastfeeding::orderByDesc('id')->get();

        return view('layouts.pages.admin.breastfeeding', compact('data'));
    }
    public function add(Request $request)
    {
        $validate =  $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required|url',
        ]);

        Breastfeeding::create([
            'title' => $validate['title'],
            'description' => $validate['description'],
            'link' => $validate['link'],
        ]);

        return redirect()->route('admin.breastfeeding')->with('message', 'Add Data Successfully');
    }

    public function edit(Request $request, $id)
    {
        $art = Breastfeeding::findOrFail($id);

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

        return redirect()->route('admin.breastfeeding')->with('message', 'Update Successfully');
    }

    public function destroy($id)
    {
        $art = Breastfeeding::findOrFail($id);
        $art->delete();

        return back()->with('message', 'Deleted successfully');
    }
}

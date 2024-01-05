<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $article = Artikel::orderByDesc('id')->get();
        return view('layouts.pages.article', compact('article'));
    }

    public function view()
    {
        $data = Artikel::orderByDesc('id')->get();

        return view('layouts.pages.admin.artikel', compact('data'));
    }

    public function show($id)
    {
        $article = Artikel::findOrFail($id);

        return view('layouts.pages.detail-article', compact('article'));
    }
    public function add(Request $request)
    {
        $validate =  $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Artikel::create([
            'title' => $validate['title'],
            'description' => $validate['description'],
        ]);

        return redirect()->route('admin.article')->with('message', 'Add Article Successfully');
    }

    public function edit(Request $request, $id)
    {
        $art = Artikel::findOrFail($id);

        $validate =  $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $art->update([
            'title' => $validate['title'],
            'description' => $validate['description'],
        ]);

        return redirect()->route('admin.article')->with('message', 'Update Article Successfully');
    }

    public function destroy($id)
    {
        $art = Artikel::findOrFail($id);
        $art->delete();

        return back()->with('message', 'Article Deleted successfully');
    }
}

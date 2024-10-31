<?php

namespace App\Http\Controllers;

use App\Models\ContentAuthor;
use Illuminate\Http\Request;
use App\Models\ImportantDate;

class AuthorController extends Controller
{
    public function index()
    {
        $importantDates = ImportantDate::all();
        $contents = ContentAuthor::all();
        return view('pages.dashboard.forauthor', compact('importantDates', 'contents'));
    }

    public function storeImportantDate(Request $request)
    {
        $request->validate([
            'important' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        ImportantDate::create($request->all());

        return redirect()->back()->with('success', 'Important date added successfully');
    }

    public function deleteImportantDate($id)
    {
        ImportantDate::destroy($id);

        return redirect()->back()->with('success', 'Important date deleted successfully');
    }

    public function storeContent(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        ContentAuthor::create($request->all());

        return redirect()->back()->with('success', 'Content added successfully');
    }

    public function editContent($id)
    {
        $content = ContentAuthor::findOrFail($id);
        return view('pages.dashboard.forauthoredit', compact('content'));
    }

    public function updateContent(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $content = ContentAuthor::findOrFail($id);
        $content->update($request->all());

        return redirect()->route('for-author')->with('success', 'Content updated successfully');
    }

    public function deleteContent($id)
    {
        ContentAuthor::destroy($id);

        return redirect()->back()->with('success', 'Content deleted successfully');
    }
}

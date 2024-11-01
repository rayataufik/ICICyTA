<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    public function index()
    {
        $committees = Committee::all();
        return view('pages.dashboard.commitee', compact('committees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required',
        ]);

        Committee::create($request->all());
        return redirect()->back()->with('success', 'Committee added successfully');
    }

    public function edit($id)
    {
        $committee = Committee::findOrFail($id);
        return view('pages.dashboard.commiteeedit', compact('committee'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $committee = Committee::findOrFail($id);
        $committee->update($request->all());
        return redirect()->route('commitee.index')->with('success', 'Committee updated successfully');
    }

    public function destroy($id)
    {
        $committee = Committee::findOrFail($id);
        $committee->delete();
        return redirect()->back()->with('success', 'Committee deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpeakerController extends Controller
{
    public function index()
    {
        $speakers = Speaker::all();
        return view('pages.dashboard.speakers', compact('speakers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image',
            'link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('speakers', 'public');
        }

        Speaker::create($validated);
        return redirect()->back()->with('success', 'Speaker added successfully');
    }

    public function edit(Speaker $speaker)
    {
        return view('pages.dashboard.speakeredit', compact('speaker'));
    }

    public function update(Request $request, Speaker $speaker)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image',
            'link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            if ($speaker->image) {
                Storage::delete('public/' . $speaker->image);
            }
            $validated['image'] = $request->file('image')->store('speakers', 'public');
        }

        $speaker->update($validated);
        return redirect()->route('dashboard.speakers.index')->with('success', 'Speaker updated successfully');
    }

    public function destroy(Speaker $speaker)
    {
        if ($speaker->image) {
            Storage::delete('public/' . $speaker->image);
        }
        $speaker->delete();
        return redirect()->back()->with('success', 'Speaker deleted successfully');
    }
}

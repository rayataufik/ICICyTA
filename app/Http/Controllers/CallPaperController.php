<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\CallPaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CallPaperController extends Controller
{
    public function index()
    {
        $callPaper = CallPaper::firstOrCreate([]);
        $contents = $callPaper->contents;
        return view('pages.dashboard.callpaper', compact('callPaper', 'contents'));
    }

    public function update(Request $request, CallPaper $callPaper)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'cfp_title' => 'nullable|string|max:255',
            'cfp_description' => 'nullable|string',
            'cfp_image' => 'nullable|image',
            'tour_title' => 'nullable|string|max:255',
            'tour_poster' => 'nullable|image',
            'background_image' => 'nullable|image',
        ]);

        if ($request->hasFile('background_image')) {
            if ($callPaper->background_image) {
                Storage::delete('public/' . $callPaper->background_image);
            }
            $imagePath = $request->file('background_image')->store('cfp_backgorund-image', 'public');
            $validated['background_image'] = $imagePath;
        }

        if ($request->hasFile('cfp_image')) {
            if ($callPaper->cfp_image) {
                Storage::delete('public/' . $callPaper->cfp_image);
            }
            $imagePath = $request->file('cfp_image')->store('cfp_images', 'public');
            $validated['cfp_image'] = $imagePath;
        }

        if ($request->hasFile('tour_poster')) {
            if ($callPaper->tour_poster) {
                Storage::delete('public/' . $callPaper->tour_poster);
            }
            $imagePath = $request->file('tour_poster')->store('tour_posters', 'public');
            $validated['tour_poster'] = $imagePath;
        }

        $callPaper->update($validated);

        if ($request->filled('title_content') && $request->filled('description_content')) {
            $validatedContent = $request->validate([
                'title_content' => 'nullable|string|max:255',
                'description_content' => 'nullable|string',
            ]);

            $callPaper->contents()->create([
                'title_content' => $validatedContent['title_content'],
                'description_content' => $validatedContent['description_content'],
            ]);
        }

        return redirect()->back()->with('success', 'Call for paper updated successfully!');
    }

    public function editContent(Content $content)
    {
        return view('pages.dashboard.callforpaperedit', compact('content'));
    }

    public function updateContent(Request $request, Content $content)
    {
        $validatedData = $request->validate([
            'title_content' => 'nullable|string|max:255',
            'description_content' => 'nullable|string',
        ]);

        $content->update($validatedData);

        return redirect()->route('dashboard.callpaper.index')->with('success', 'Content updated successfully!');
    }


    public function destroyContent(Content $content)
    {
        $content->delete();

        return redirect()->back()->with('success', 'Content deleted successfully!');
    }

    public function destroyImage(CallPaper $callPaper)
    {
        if ($callPaper->image) {
            Storage::delete('public/' . $callPaper->background_image);
            $callPaper->update(['background_image' => null]);
        }

        return redirect()->back()->with('success', 'Image deleted successfully!');
    }
}

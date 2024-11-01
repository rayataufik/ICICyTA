<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::firstOrCreate([]);
        return view('pages.dashboard.about', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if ($about->image) {
                Storage::delete('public/' . $about->image);
            }
            $imagePath = $request->file('image')->store('about_images', 'public');
            $validated['image'] = $imagePath;
        }

        $about->update($validated);

        return redirect()->back()->with('success', 'About conference updated successfully!');
    }

    public function destroyImage(About $about)
    {
        if ($about->image) {
            Storage::delete('public/' . $about->image);
            $about->update(['image' => null]);
        }

        return redirect()->back()->with('success', 'Image deleted successfully!');
    }
}

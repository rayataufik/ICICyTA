<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    public function index()
    {
        $heroSection = HeroSection::firstOrCreate([]);
        return view('pages.dashboard.home', compact('heroSection'));
    }

    public function update(Request $request, HeroSection $heroSection)
    {
        $validated = $request->validate([
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'location' => 'nullable|string|max:255',
            'conference_title' => 'nullable|string|max:255',
            'edas_link' => 'nullable|string|max:255',
            'sponsor_image' => 'nullable|image',
        ]);

        $heroSection->update($validated);

        if ($request->hasFile('sponsor_image')) {
            $filePath = $request->file('sponsor_image')->store('sponsors', 'public');
            $heroSection->sponsors()->create(['sponsor_image' => $filePath]);
        }

        return redirect()->back()->with('success', 'Hero section updated successfully with sponsors!');
    }

    public function destroySponsor(Sponsor $sponsor)
    {
        if ($sponsor->sponsor_image) {
            $imagePath = storage_path('app/public/' . $sponsor->sponsor_image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $sponsor->delete();

        return redirect()->back()->with('success', 'Sponsor deleted successfully!');
    }
}

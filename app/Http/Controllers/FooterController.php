<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Supporter;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::firstOrCreate([]);
        return view('pages.dashboard.footer', compact('footers'));
    }

    public function update(Request $request, Footer $footers)
    {
        $validated = $request->validate([
            'vanue_link' => 'nullable|string',
            'visitor_link' => 'nullable|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'facebook' => 'nullable|url',
            'image_supporter' => 'nullable|image',
        ]);

        $footers->update($validated);

        if ($request->hasFile('image_supporter')) {
            $filePath = $request->file('image_supporter')->store('supporter', 'public');
            $footers->supporter()->create(['image_supporter' => $filePath]);
        }
        return redirect()->back()->with('success', 'Footer updated successfully');
    }

    public function destroySupporter(Supporter $supporter)
    {
        if ($supporter->image_supporter) {
            $imagePath = storage_path('app/public/' . $supporter->image_supporter);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $supporter->delete();
        }

        return redirect()->back()->with('success', 'Supporter deleted successfully!');
    }
}

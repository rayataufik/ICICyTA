<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Speaker;
use App\Models\CallPaper;
use App\Models\Content;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $heroSection = HeroSection::with('sponsors')->first();
        $aboutSection = About::first();
        $aboutSection->description = html_entity_decode($aboutSection->description);
        $SpeakersSection = Speaker::all();
        $cfps = CallPaper::first();
        $contents = Content::all();

        return view('pages.home', compact('heroSection', 'aboutSection', 'SpeakersSection', 'cfps', 'contents'));
    }
}

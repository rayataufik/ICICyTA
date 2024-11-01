<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Footer;
use App\Models\Content;
use App\Models\Speaker;
use App\Models\CallPaper;
use App\Models\Committee;
use App\Models\BankAccount;
use App\Models\HeroSection;
use Illuminate\Http\Request;
use App\Models\ContentAuthor;
use App\Models\ImportantDate;
use App\Models\RegistrationFee;
use App\Models\RegistrationLink;

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
        $ImportantDates = ImportantDate::all();
        $ContentAuthors = ContentAuthor::all();
        $RegistrationFees = RegistrationFee::all();
        $BankAccounts = BankAccount::all();
        $RegistrationLink = RegistrationLink::first();
        $Committees = Committee::all();

        return view('pages.home', compact(
            'heroSection',
            'aboutSection',
            'SpeakersSection',
            'cfps',
            'contents',
            'ImportantDates',
            'ContentAuthors',
            'RegistrationFees',
            'BankAccounts',
            'RegistrationLink',
            'Committees'
        ));
    }
}

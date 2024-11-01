<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use Illuminate\Http\Request;
use App\Models\RegistrationFee;
use App\Models\RegistrationLink;
use Illuminate\Support\Facades\Storage;

class RegistrationFeeController extends Controller
{
    public function index()
    {
        $fees = RegistrationFee::all();
        $accounts = BankAccount::all();
        $registrationLink = RegistrationLink::first();
        return view('pages.dashboard.registrationfee', compact('fees', 'accounts', 'registrationLink'));
    }

    public function storeRegistrationFee(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'price_usd' => 'required|numeric',
            'price_idr' => 'required|numeric'
        ]);

        RegistrationFee::create($request->all());
        return redirect()->back()->with('success', 'Registration fee added successfully.');
    }

    public function destroyRegistrationFee($id)
    {
        RegistrationFee::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Registration fee deleted successfully.');
    }

    public function storeBankAccount(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|string',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('bank_images', 'public');
        }

        BankAccount::create($data);
        return redirect()->back()->with('success', 'Bank account added successfully.');
    }

    public function editBankAccount($id)
    {
        $account = BankAccount::findOrFail($id);
        return view('pages.dashboard.registrationfeeedit', compact('account'));
    }

    public function updateBankAccount(Request $request, $id)
    {
        $request->validate([
            'payment_method' => 'required|string',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $account = BankAccount::findOrFail($id);

        $account->payment_method = $request->payment_method;
        $account->description = $request->description;

        if ($request->hasFile('image')) {
            if ($account->image) {
                Storage::disk('public')->delete($account->image);
            }
            $account->image = $request->file('image')->store('bank_images', 'public');
        }

        $account->save();

        return redirect()->route('registration.index')->with('success', 'Bank account updated successfully.');
    }

    public function destroyBankAccount($id)
    {
        $account = BankAccount::findOrFail($id);
        if ($account->image) {
            Storage::disk('public')->delete($account->image);
        }
        $account->delete();
        return redirect()->back()->with('success', 'Bank account deleted successfully.');
    }

    public function storeOrUpdateLink(Request $request)
    {
        $request->validate([
            'link' => 'required|url'
        ]);

        $registrationLink = RegistrationLink::firstOrNew();
        $registrationLink->link = $request->link;
        $registrationLink->save();

        return redirect()->back()->with('success', 'Registration link updated successfully.');
    }
}

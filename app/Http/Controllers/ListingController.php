<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Http\Controllers\Controller;
use function Laravel\Prompts\search;

class ListingController extends Controller
{
    // Show all Listing
    public function index() {
        return view('listings.index', [
                'listings' => Listing::latest()->filter
                (request(['tag', 'search']))->paginate(4)
            ]);
    }

    // Show single listing
    public function show(Listing $Listing) {
        return view('listings.show', [
            'listing' => $Listing
        ]);

    }

    // Show Create Form
    public function create() {
        return view('listings.create');
    }

    // Store listing data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company',)], // this means company must be unique
            'loacation' => 'required',
            'website' => 'required', 
            'email' => ['required', 'email'], // must be formated as email
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/');
    }

    // Show Edit Form
    public function edit(Listing $listing) {
        
        return view('listings.edit', ['listing' => $listing]);
    }

    // Update Listings data
    public function update(Request $request, Listing $listing) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'loacation' => 'required',
            'website' => 'required', 
            'email' => ['required', 'email'], // must be formated as email
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back();
    }

    // Delete Listing
    public function destroy(Listing $listing) {
        $listing->delete();

        return redirect('/');

    }
}
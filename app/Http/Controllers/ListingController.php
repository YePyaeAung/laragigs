<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4),
        ]);
    }
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
    public function create()
    {
        return view('listings.create');
    }
    public function store()
    {
        $listsStoreData = request()->validate([
            'company' => ['required', Rule::unique('listings', 'company')],
            'title' => ['required'],
            'location' => ['required'],
            'email' => ['required', 'email'],
            'website' => ['required'],
            'tags' => ['required'],
            'description' => ['required'],
        ]);
        if(request()->hasFile('logo')) {
            $listsStoreData['logo'] = request()->file('logo')->store('logos', 'public');
        }
        Listing::create($listsStoreData);
        return redirect('/')->with('flashMessage', "List Created Successfully!");
    }
    public function edit(Listing $listing)
    {
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }
    public function update(Listing $listing)
    {
        $listsUpdateData = request()->validate([
            'company' => ['required', Rule::unique('listings', 'company')],
            'title' => ['required'],
            'location' => ['required'],
            'email' => ['required', 'email'],
            'website' => ['required'],
            'tags' => ['required'],
            'description' => ['required'],
        ]);
        if(request()->hasFile('logo')) {
            $listsUpdateData['logo'] = request()->file('logo')->store('logos', 'public');
        }
        $listing->update($listsUpdateData);
        return redirect('/')->with('flashMessage', "List Updated Successfully!");
    }
}

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
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get(),
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
        Listing::create($listsStoreData);
        return redirect('/')->with('flashMessage', "List Created Successfully!");
    }
}

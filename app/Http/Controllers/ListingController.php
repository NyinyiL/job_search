<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //show all function when you are logged in
    public function __construct()
    {
        $this->middleware('auth')->except('index') ;
    }

    //Show all listings
    public function index() {         //public function index(Request $request) same function with depedency injection
                                    // dd(request('tag)) same thing      //dd($request) 
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(10) //all() same thing
        ]);
    }

    //Shaw single listing
    public function show(Listing $listing) {
        return view('listings.show' , [
            'listing' => $listing 
            ]) ;
    }

    //Show create form
    public function create() {
        return view('listings.create') ;
    }

    //store listing data 
    public function store(Request $request) {
        $formField = $request->validate([
            'title' => 'required' ,
            'company' => ['required', Rule::unique('listings', 'company')] , //rule::unique for don't allow for choosen one
            'location' => 'required' ,
            'website' => 'required' ,
            'email' => ['required', 'email'] ,
            'tags' => 'required', 
            'description' => 'required' ,
        ]) ;

        if($request->hasFile('logo')) {
            $formField['logo'] = $request->file('logo')->store('logos', 'public') ;
        }

        $formField['user_id'] = auth()->id() ;

        Listing::create($formField) ;

        return redirect('/')->with('message', 'Listing Add Successful!') ;
    }

    // show edit form
    public function edit(Listing $listing) {
        return view('listings.edit', [
            'listing' => $listing 
        ]) ;
    }

    //store listing data 
    public function update(Request $request, Listing $listing) {
        $formField = $request->validate([
            'title' => 'required' ,
            'company' => ['required'] , //rule::unique for don't allow for choosen one
            'location' => 'required' ,
            'website' => 'required' ,
            'email' => ['required', 'email'] ,
            'tags' => 'required', 
            'description' => 'required' ,
        ]) ;

        if($request->hasFile('logo')) {
            $formField['logo'] = $request->file('logo')->store('logos', 'public') ;
        }

        $listing->update($formField) ;

        return back()->with('message', 'Listing Updating Successful!') ;
    }

    //Delete Listing 
    public function delete(Listing $listing) {
        $listing->delete() ;
        return redirect('/')->with('message', 'Deleted Listing') ;
    }

    //manage Listings
    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]) ;
    }
}















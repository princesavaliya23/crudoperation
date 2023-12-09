<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CountryController extends Controller
{
    /**
     * Instantiate a new ProductController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-countrie|edit-countrie|delete-countrie', ['only' => ['index','show']]);
       $this->middleware('permission:create-countrie', ['only' => ['create','store']]);
       $this->middleware('permission:edit-countrie', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-countrie', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('countries.index', [
            'countries' => Country::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request): RedirectResponse
    {
        Country::create($request->all());
        return redirect()->route('countries.index')
                ->withSuccess('New data is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $countrie): View
    {
        return view('countries.show', [
            'countrie' => $countrie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $countrie): View
    {
        return view('countries.edit', [
            'countrie' => $countrie
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $countrie): RedirectResponse
    {
        $countrie->update($request->all());
        return redirect()->back()
                ->withSuccess('Country is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $countrie): RedirectResponse
    {
        $countrie->delete();
        return redirect()->route('countries.index')
                ->withSuccess('Country is deleted successfully.');
    }
}
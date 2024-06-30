<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Laravel_1;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class Laravel1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('Laravel_1s.index', [
            'Laravel_1s' => Laravel_1::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $request->user()->Laravel_1s()->create($validated);

        return redirect(route('Laravel_1s.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Laravel_1 $laravel_1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laravel_1 $laravel_1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laravel_1 $laravel_1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laravel_1 $laravel_1)
    {
        //
    }
}

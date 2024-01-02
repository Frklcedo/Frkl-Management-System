<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profiles.index', ['profiles' => Profile::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfileRequest $request)
    {

        $profile = $request->user()->profiles()->create(
            $request->validated(),
        );

        return redirect()->route('profiles.show', ['profile' => $profile]);

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {

        $profile = Profile::findOrFail($id);

        return view('profiles.show', [
            'profile' => $profile,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $profile = Profile::findOrFail($id);

        return view('profiles.edit', [
            'profile' => $profile,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileRequest $request, Profile $profile)
    {

        $profile->update($request->validated());

        return redirect()->route('profiles.show', ['profile' => $profile])
            ->with('success', $profile->name.' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {

        $profile->delete();

        return redirect()->route('profiles.index');
    }
}

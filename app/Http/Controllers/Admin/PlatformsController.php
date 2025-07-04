<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platforms = Platform::all();

        return view("platforms.index", compact("platforms"));
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
    public function store(Request $request)
    {
        $data = $request->all();

        $newPlatform = new Platform();

        $newPlatform->name = $data['name'];
        $newPlatform->color = $data['color'];

        $newPlatform->save();

        return redirect()->route('platforms.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Platform $platform)
    {
        return view('platforms.show', compact('platform'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Platform $platform)
    {
        $data = $request->all();

        $platform->name = $data['name'];
        $platform->color = $data['color'];

        $platform->update();

        return redirect()->route('platforms.show', $platform);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Platform $platform)
    {
        $platform->games()->detach();
        $platform->delete();

        return redirect()->route("platforms.index");
    }
}

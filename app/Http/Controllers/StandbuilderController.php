<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Standbuilder;

class StandbuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $query = Standbuilder::where('status', 'published');
            $standbuilders = $query->paginate(10);
            return view('stand-builders', compact('standbuilders'));
        } catch (\Throwable $th) {
            abort(404);
        }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $username)
    {
        try {
            $standbuilder = Standbuilder::where('status', 'published')->where('username', $username)->firstOrFail();
            return view('stand-builder-inner', compact('standbuilder'));
        } catch (\Throwable $th) {
            abort(404);
        }
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query = Show::where('status', 'published');

            // 🔍 Filter by title if provided
            if ($request->filled('title')) {
                $query->where('title', 'like', '%' . $request->title . '%');
            }

            // 📅 Order by nearest show first
            $query->orderBy('start_date', 'asc');

            // 📄 Paginate results
            $shows = $query->paginate(10)->appends($request->query());

            return view('trade-show', compact('shows'));

        } catch (\Throwable $th) {
            // If error, send empty data
            $shows = collect();
            return view('trade-show', compact('shows'));
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
    public function show(string $slug)
    {
        try {
            $show = Show::where('slug', $slug)->where('status', 'published')->firstOrFail();
            return view('trade-show-inner', compact('show'));
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

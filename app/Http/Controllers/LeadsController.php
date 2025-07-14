<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Http\Requests\LeadRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // Check if user is logged in
        $user = auth()->user();

        // If not authenticated, register the user using submitted data
        if (!$user) {
            $request->validate([
                'email' => 'required|email|unique:users,email',
                'name' => 'required|string|max:255',
                'phone' => 'nullable|string|max:20',
            ]);

            $password = Str::random(10); // or you can send this in email

            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'), // optional
                'password' => Hash::make($password),
            ]);

            Auth::login($user); // log them in
        }

        $designAttachments = [];

        // Handle file uploads if present
        if ($request->hasFile('design_attachments')) {
            $file = $request->file('design_attachments');

            // Handle multiple files if it's an array
            if (is_array($file)) {
                foreach ($file as $f) {
                    $path = $f->store('uploads', 'public');
                    $designAttachments[] = $path;
                }
            } else {
                // Single file upload
                $path = $file->store('uploads', 'public');
                $designAttachments[] = $path;
            }
        }

        // Save lead
        $lead = Lead::create([
            'author_id' => $user->id,
            'show_id' => $request->input('show_id'),
            'city_id' => $request->input('city_id'),
            'stand_size' => $request->input('stand_size'),
            'stand_size_measurement_unit' => $request->input('stand_size_measurement_unit'),
            'services' => $request->input('services'),
            'price_range' => json_encode([
                'price' => $request->input('price_range')
            ]),
            'require_elements' => json_encode($request->input('elements_needed', [])),
            'design_attachments' => !empty($designAttachments) ? json_encode($designAttachments) : null,
            'employee_onsite_avilable' => $request->input('employee_onsite_avilable'),
        ]);

        return redirect()->back()->with('contact_message', 'Submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

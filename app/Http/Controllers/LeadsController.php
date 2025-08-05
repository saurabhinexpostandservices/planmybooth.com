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
                'company_name' => 'required|string|max:255'
            ]);

            $password = Str::random(10); // or you can send this in email

            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'), // optional
                'company_name' =>  $request->input('company_name'),
                'password' => Hash::make($password),
            ]);

            Auth::login($user); // log them in
        }

        $designAttachments = [];

        // Handle file uploads if present
        if ($request->hasFile('attachment')) {
            $files = $request->file('attachment');

            // Handle multiple files if it's an array
            if (is_array($files)) {
                foreach ($files as $file) {
                    $path = $file->store('uploads', 's3');
                    $designAttachments[] = Storage::disk('s3')->url($path); // Optional: get full URL
                }
            } else {
                // Single file upload
                $path = $files->store('uploads', 's3');
                $designAttachments[] = Storage::disk('s3')->url($path); // Optional: get full URL
            }
        }

        // Save lead
        $lead = Lead::create([
            'author_id' => $user->id,
            'show' => $request->input('trade_show_event'),
            'city' => $request->input('city'), 
            'stand_size' => $request->input('stand_size'),
            'service' => $request->input('needs'),
            'message' => $request->input('additional_comments'),
            'page_url' => $request->input('page_url'),
            'ip' => $request->input('ip'),
            'budget' => $request->input('budget'),
            'attachments' => !empty($designAttachments) ? json_encode($designAttachments) : null,
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

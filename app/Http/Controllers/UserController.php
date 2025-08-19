<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function get_user_info(){
        try {
            $user = auth()->user();
            return response()->json($user);
        } catch (\Throwable $th) {
            //throw $th;
        } 
    }

    public function update_user_info(Request $request){
        try {
            $request->validate([
                'name' => 'required|string',
                'phone' => 'sometimes|nullable|string',
                'company_name' => 'sometimes|string'
            ]);

            $user = auth()->user();
            $user->name = $request->name;
            if ($request->has('phone')) {
                $user->phone = $request->phone;
            }

            if ($request->has('company_name')) {
                $user->company_name = $request->company_name;
            }
            $user->save();

            return redirect()->back()->with('message', 'Updated!');
        } catch (\Throwable $th) {
            // Optionally log the error or handle it as needed
            return redirect()->back()->with('error', 'Update failed.');
        }
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'sometimes|nullable|string',
            'company_name' => 'required|string'
        ]);

        try {
            $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'company_name' => $request->company_name,
            ]);

            // Optionally log the user in
            auth()->login($user);

            return redirect()->route('profile')->with('message', 'Registration successful');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Registration failed');
        }
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
             return redirect()->route('profile')->with('message', 'login successful');
        }

        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')->with('message', 'Logged out successfully.');
    }

    public function generate_new_pass(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();
        $newPassword = Str::random(10);
        $user->password = bcrypt($newPassword);
        $user->save();

        Mail::send('emails.new-password', [
            'user' => $user,
            'password' => $newPassword
        ], function($message) use ($user) {
            $message->to($user->email)
                    ->subject('Your New Password');
        });

        return redirect()->back()->with('message', 'A new password has been sent to your email.');
    }

    public function update_pass(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'], // expects new_password_confirmation
        ]);

        $user = auth()->user();

        if (!\Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        // Prevent using the same password
        if (\Hash::check($request->new_password, $user->password)) {
            return redirect()->back()->withErrors(['new_password' => 'New password cannot be the same as the current password.']);
        }

        // Update password
        $user->password = bcrypt($request->new_password);
        $user->save();

        return redirect()->back()->with('message', 'Password updated successfully.');
    }


    public function fetch_my_leads()
    {
        $userId = auth()->user()->id; // Get the logged-in user's ID

        $leads = Lead::where('author_id', $userId)->latest()->paginate(10);

        return view('profile-request', compact('leads'));
    }

}

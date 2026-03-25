<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
// Note: Agar PasswordMail file nahi banayi hai toh niche wali line error de sakti hai
// use App\Mail\PasswordMail; 

class OtpController extends Controller
{
    public function sendOtp(Request $request)
    {
        // 6 digit random OTP
        $otp = rand(100000, 999999);

        // Session mein store karo validation ke liye
        session(['otp' => $otp, 'otp_email' => $request->email]);

        // Simple text mail bhejo
        Mail::raw("Your OTP is: $otp", function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Your OTP Code');
        });

        return response()->json(['success' => true]);
    }

    public function verifyOtp(Request $request)
    {
        // 1. OTP aur Email check karo
        if ($request->otp == session('otp') && $request->email == session('otp_email')) {

            // 2. Random password generate karo
            $password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'), 0, 8);

            // 3. Database mein User create ya update karo (Password store ho raha hai)
            \App\Models\User::updateOrCreate(
                ['email' => $request->email], // Email se dhoondo
                [
                    'name' => $request->name ?? 'User', // Name save karo
                    'phone' => $request->phone,           // Phone save karo
                    'password' => \Illuminate\Support\Facades\Hash::make($password), // Password Hash karke store karo
                ]
            );

            // 4. Login URL
            $resetUrl = url('/login');

            // 5. HTML Email Content
            $htmlContent = "
            <div style='font-family: Arial, sans-serif; padding: 20px; border: 1px solid #eee; border-radius: 10px; max-width: 600px;'>
                <h2 style='color: #2d3748;'>🎉 Congratulations!</h2>
                <p>Your account has been created successfully. You can now login with these details:</p>
                <div style='background: #f7fafc; padding: 15px; border-radius: 5px; border: 1px solid #e2e8f0;'>
                    <p><strong>Email:</strong> {$request->email}</p>
                    <p><strong>Temporary Password:</strong> <code style='color: #e53e3e; font-size: 1.1em;'>{$password}</code></p>
                </div>
                <br>
                <p>Please click the button below to login. We recommend changing your password after first login:</p>
                <a href='{$resetUrl}' style='background-color: #3182ce; color: white; padding: 12px 25px; text-decoration: none; border-radius: 5px; display: inline-block; font-weight: bold;'>Login Now</a>
                <br><br>
                <hr style='border: none; border-top: 1px solid #eee;'>
                <p style='color: #718096; font-size: 12px;'>If you didn't request this, please ignore this email.</p>
            </div>
        ";

            // 6. Mail bhejo
            \Illuminate\Support\Facades\Mail::send([], [], function ($message) use ($request, $htmlContent) {
                $message->to($request->email)
                    ->subject('Account Created - Your Login Details')
                    ->html($htmlContent);
            });

            return response()->json(['success' => true]);
        }

        // OTP galat hone par
        return response()->json(['success' => false, 'message' => 'Invalid OTP']);
    }

    public function sendPasswordEmail(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        // Abhi ke liye raw mail bhej sakte hain agar Mailable file nahi hai
        Mail::raw("Your password is: $password", function ($message) use ($email) {
            $message->to($email)->subject('Your Account Password');
        });

        return response()->json(['success' => true]);
    }

    public function resetPassword(Request $request)
    {
        $email = $request->email;
        $newPassword = $request->password;

        // DB mein password update karo
        User::where('email', $email)->update(['password' => Hash::make($newPassword)]);

        Mail::raw("Your new password is: $newPassword", function ($message) use ($email) {
            $message->to($email)->subject('Password Reset Successful');
        });

        return response()->json(['success' => true]);
    }
}
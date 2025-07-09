<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
            ]);

            $user = auth()->user();
            $user->name = $request->name;
            if ($request->has('phone')) {
                $user->phone = $request->phone;
            }
            $user->save();

            return redirect()->back()->with('message', 'Updated!');
        } catch (\Throwable $th) {
            // Optionally log the error or handle it as needed
            return redirect()->back()->with('error', 'Update failed.');
        }
    }

}

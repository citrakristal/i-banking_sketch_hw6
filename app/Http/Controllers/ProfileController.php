<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $profile = UserProfile::where('user_id', $user->id)->first();

        return view('profile', ['user' => $user, 'profile' => $profile]);
    }

    public function editProfile()
    {
        $user = Auth::user();
        $profile = UserProfile::where('user_id', $user->id)->first();

        return view('editProfile', ['user' => $user, 'profile' => $profile]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $profile = UserProfile::where('user_id', $user->id)->first();
    
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // Add validation rules for other fields you want to edit
        ]);
    
        $user->name = $request->input('nama');
        $user->email = $request->input('email');
        // Update other fields as needed
        /** @var \App\Models\User $user **/
        $user->save();
    
        // Update profile data
        $profile->name = $request->input('nama');
        $profile->ttl = $request->input('ttl');   // Replace with your field names
        $profile->alamat = $request->input('alamat'); // Replace with your field names
        $profile->noTelp = $request->input('noTelp'); // Replace with your field names
        $profile->save();
    
        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }
    
}

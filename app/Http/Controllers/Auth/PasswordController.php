<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!$user || !Hash::check($request->current_password, $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['Current password is incorrect'],
            ]);
            // return redirect()->route('admin.profile')->with('error', 'Password lama tidak sesuai');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();
        if(Auth::user()->role->name==='Admin'){
        return redirect()->route('admin.profile')->with('success', 'Password berhasil dirubah');
        }else{
        return redirect()->route('user.profile')->with('success', 'Password berhasil dirubah');
        }
    }
}

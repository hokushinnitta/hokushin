<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'This email is already taken',
            'password.required' => 'Password is required',
            'password.confirmed' => 'Passwords do not match',
        ]);

        try {
            \DB::transaction(function () use ($request) {
                $user = new User([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);

                $user->save();
            });

            return redirect()->route('admin-menu')->with('success', 'User created successfully.');

        } catch (\Exception $e) {
            return redirect()->route('admin-menu')->with('error', 'An error occurred while creating the user.');
        }
    }
}

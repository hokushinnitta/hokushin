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
        \Log::info('Store method called');
    
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
    
        \Log::info('Validation passed');
    
        try {
            \DB::transaction(function () use ($request) {
                \Log::info('Inside transaction');
    
                $user = new User([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
    
                \Log::info('User instance created');
    
                $user->save();
    
                \Log::info('User saved');
            });
    
            \Log::info('Transaction committed');
    
            return redirect()->route('users.create')->with('success', 'User created successfully.');
    
        } catch (\Exception $e) {
            \Log::error('Error occurred: ' . $e->getMessage());
    
            return redirect()->route('users.create')->with('error', 'An error occurred while creating the user.');
        }
    }
    
}

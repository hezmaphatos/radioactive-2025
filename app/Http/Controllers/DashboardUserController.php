<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.User.index', [
            'users' => User::paginate(1)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.create', [
            'users' => User::all() 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        User::create($validatedData);

        return redirect('/dashboard/users')->with('success', 'New user has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit', [
            'user' => $user,
            'users' => User::all() 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'password' => 'required|string|min:8'
        ];
        
        if ($request->email != $user->email) {
            $rules['email'] = 'required|email|unique:user';
        }
        
        $validatedData = $request->validate($rules);
        
        if (!$request->filled('password')) {
            unset($validatedData['password']);
        }
        
        // Update the user
        $user->update($validatedData);
        
        return redirect('/dashboard/users')->with('success', 'User has been updated!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/dashboard/users')->with('success', 'User has been deleted!');
    }
}

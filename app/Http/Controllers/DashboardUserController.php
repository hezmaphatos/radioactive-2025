<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $users = User::orderBy('role_id', 'asc');
    
        if ($search) {
            $users = $users->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('email', 'like', '%' . $search . '%')
                      ->orWhereHas('role', function ($query) use ($search) {
                          $query->where('roles', 'like', '%' . $search . '%');
                      });
            });
        }
        
        $users = $users->paginate(5)->withQueryString();
        
        return view('Dashboard.User.index', [
            'users' => $users
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.User.create', [
            'users' => User::all(),
            'roles' => Role::all()
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
            'password' => 'required|string|min:8',
            'role_id' => 'required'
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
        return view('Dashboard.User.edit', [
            'user' => $user,
            'users' => User::all(),
            'roles' => Role::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'password' => 'required|string|min:8',
            'role_id' => 'required'
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

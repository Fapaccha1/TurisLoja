<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Museum;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('dashboard.users.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $museums = Museum::all();
        return view('dashboard.users.create', compact('roles','museums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'roles' => 'required',
            'email' => 'unique:users'
        ]);

        $roles = $request->input('roles');

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(10),
        ]);

        $user->syncRoles($request->input('roles'));

        if ($request->museums) {
            $user->museums()->attach($request->museums);
        }

        return redirect()->route('dashboard.users.index', $user)->with('info', 'Usuario creado con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        $museums = Museum::all();
        return view('dashboard.users.edit', compact('user', 'roles','museums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'roles' => 'required',
            'museums' => 'required'
        ]);
        $roles = $request->input('roles');

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        $user->roles()->sync($roles);
        $user->museums()->sync($request->museums);

        return redirect()->route('dashboard.users.index', $user)->with('info', 'Usuario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('dashboard.users.index')->with('info', 'Usuario borrado con éxito');
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Museum;
use App\Models\User;
use Illuminate\Http\Request;

class MuseumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $museums = Museum::all();
        return view('dashboard.museums.index', compact('museums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::role('Admin museo')->get();
        return view('dashboard.museums.create', compact('users'));
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
            'address' => 'required',
            'description' => 'required',
        ]);


        $museum = Museum::create([
            'name' => $request->name,
            'address' => $request->address,
            'description' => strtoupper($request->description)
        ]);

        if ($request->users) {
            $museum->users()->attach($request->users);
        }

        return redirect()->route('dashboard.museums.index', $museum)->with('info', 'Museo creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Museum $museum)
    {
        $users = User::role('Admin museo')->get();
        return view('dashboard.museums.edit', compact('museum', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Museum $museum)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        $museum->update([
            'name' => $request->name,
            'address' => $request->address,
            'description' => strtoupper($request->description)
        ]);
        
        $museum->users()->sync($request->users);
        
        return redirect()->route('dashboard.museums.index', $museum)->with('info', 'Museo actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Museum $museum)
    {
        $museum->delete();
        return redirect()->route('dashboard.museums.index')->with('info', 'Museo borrado con éxito');
    
    }
}

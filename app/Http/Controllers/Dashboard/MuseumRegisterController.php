<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Museum;
use App\Models\MuseumRegister;
use Illuminate\Http\Request;

class MuseumRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registers = MuseumRegister::all(); 
        $countries = Country::all();
        return view('dashboard.registers.index', compact('registers','countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $user = auth()->user();
        $museums = $user->museums->pluck('name', 'id')->toArray();
        return view('dashboard.registers.create', compact('countries','museums'));
    
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
            'document' => 'required',
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'transport' => 'required',
            'register_date' => 'required',
            'day' => 'required',
            'country_id' => 'required',
            'museum_id' => 'required'
        ]);

        $user = auth()->user();

        $register = MuseumRegister::create([
            'document' => $request->document,
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'transport' => $request->transport,
            'register_date' => \Carbon\Carbon::now()->format('Y-m-d'),
            'day' => $request->day,
            'country_id' => $request->country_id,
            'user_id' => $user->id,
            'museum_id' => $request->museum_id
        ]);
        
        return redirect()->route('dashboard.registers.index', $register)->with('info', 'Registro creado con éxito');

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

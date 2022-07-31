<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Place;
use App\Models\Reason;
use App\Models\Register;
use App\Models\Transport;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registers = Register::all(); 
        return view('dashboard.registers.index', compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $country = $countries->pluck('name', 'id')->toArray();
        $reasons = Reason::all();
        $reason = $reasons->pluck('name', 'id')->toArray();
        $transports = Transport::all();
        $transport = $transports->pluck('name', 'id')->toArray();
        $places = Place::all();
        $place = $places->pluck('name', 'id')->toArray();
        $user = auth()->user();

        return $user->id;
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
            'register_date' => 'required',
            'responsible_tourist' => 'required',
            'number_of_tourist' => 'required',
            'days_of_visit' => 'required',
            'country_id' => 'required',
            'reason_item_id' => 'required',
            'transport_item_id' => 'required',
            'place_item_id' => 'required',
        ]);

        $date_fecha = $request->register_date;
        $month = Carbon::parse($date_fecha)->format('m');
        $year = Carbon::parse($date_fecha)->format('Y');
        $user = auth()->user();

        $register = Register::create([
            'number_of_tourist' => $request->number_of_tourist,
            'register_date' => $request->register_date,
            'days_of_visit' => $request->days_of_visit,
            'country_id' => $request->country_id,
            'reason_item_id' => $request->reason_item_id,
            'user_register_id' => $user->id,
            'transport_item_id' => $request->transport_item_id,
            'responsible_tourist' => $request->responsible_tourist,
            'month_of_register' => $month,
            'year_of_register' => $year,
            'place_item_id' => $request->place_item_id
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

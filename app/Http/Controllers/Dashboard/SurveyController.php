<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        $user = auth()->user();
        $surveys = Survey::where('user_id',$user->id)->get();
        return view('dashboard.survey.index', compact('surveys','countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('dashboard.survey.create', compact('countries'));
    
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
            'age' => 'required',
            'gender' => 'required',
            'country_id' => 'required',
            'recommend_visit' => 'required',
            'education_level' => 'required',
            'economic_activity' => 'required',
            'museum' => 'required',
            'interest' => 'required',
            'kid' => 'required',
            'day' => 'required',
            'reason' => 'required'
        ]);

        $user = auth()->user();

        $survey = Survey::create([
            'age' => $request->age,
            'gender' => $request->gender,
            'country_id' => $request->country_id,
            'user_id' => $user->id,
            'recommend_visit' => $request->recommend_visit,
            'education_level' => $request->education_level,
            'economic_activity' => $request->economic_activity,
            'museum' => $request->museum,
            'interest' => $request->interest,
            'kid' => $request->kid,
            'day' => $request->day,
            'reason' => $request->reason
        ]);
        
        return redirect()->route('dashboard.survey.index', $survey)->with('info', 'Encuesta creada con éxito');

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

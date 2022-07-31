<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Museum;
use App\Models\MuseumRegister;
use App\Models\Place;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $users = User::role('Admin museo')->get();
        $user = count($users);
        $actual_user = auth()->user();

        $museums = Museum::all();
        $museum = count($museums);

        $places = Place::all();
        $place = count($places);

        $museum_registers = MuseumRegister::where('user_id', $actual_user->id)->get();
        if(empty($museum_registers)){
            $museum_register = 0;
        }else{
            $museum_register = count($museum_registers);
        }

        $actual_museum_registers = MuseumRegister::where('register_date', date('Y-m-d'))->get();
        if(empty($actual_museum_registers)){
            $actual_museum_register = 0;
        }else{
            $actual_museum_register = count($actual_museum_registers);
        }
        return view('dashboard.index', compact('actual_museum_register', 'museum_register', 'actual_user', 'users','user', 'places', 'place', 'museums', 'museum'));
    }
    
}

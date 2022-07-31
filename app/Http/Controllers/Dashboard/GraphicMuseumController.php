<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\MuseumRegister;
use Illuminate\Http\Request;

class GraphicMuseumController extends Controller
{
    public function index()
    {
        $museum_registers = MuseumRegister::all();
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

        return view('dashboard.gmuseums.index', compact('museum_register','actual_museum_register'));
    }
}

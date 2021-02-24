<?php

namespace App\Http\Controllers\front\cities;

use App\models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CitiesController extends Controller
{
    public function index(){
        $cities=City::all();
        return view('front.cities.list',compact('cities'));
    }
}

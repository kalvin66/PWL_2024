<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodBeverageController extends Controller
{
    public function foodBeverage()
    {
        return view('foodBeverage');
    }
}

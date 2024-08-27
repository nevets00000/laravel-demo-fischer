<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function showCalculatorPage()
    {
        return view('MyPages.calculator');
    }
}

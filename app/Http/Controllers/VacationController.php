<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacationController extends Controller
{
    public function index()
    {
        return view('vacation.index');
    }

    public function form()
    {
        return view('vacation.form');
    }
}
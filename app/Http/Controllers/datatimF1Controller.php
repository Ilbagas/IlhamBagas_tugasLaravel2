<?php

namespace App\Http\Controllers;

use App\Models\datatim;
use Illuminate\Http\Request;
use App\Models\DataTimf1;

class DataTimf1Controller extends Controller
{
    public function index()
    {
        $tim = datatim::all();
        return view('timf1.table', compact('tim'));
    }
}
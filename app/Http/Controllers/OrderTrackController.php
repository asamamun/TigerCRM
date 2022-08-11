<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderTrackController extends Controller
{
 public function index(){
    return view('ordertrack.index')->with('user',Auth::user());
 }
}

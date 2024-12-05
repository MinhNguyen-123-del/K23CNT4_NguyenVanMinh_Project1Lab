<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NvmProductController extends Controller
{
    public function index() {
    $fruits = array("Apple","Orange","Mango","Banana","Pineapple");
    return view('welcome',compact('fruits'));
}
}

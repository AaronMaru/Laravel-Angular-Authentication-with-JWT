<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photograp;
class PhotographController extends Controller
{
    public function index() {
        $photograph = Photograp::all();
        return response()->json($photograph);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index(Request $request) {
        return response()->json(['ip'=>$request->getClientIps(),'headers' =>$request->headers->all()]);
    }
}

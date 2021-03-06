<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use \Illuminate\Http\Response;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('home');
    }

    public function test() {

        // Use library functions
        return \Illuminate\Support\Str::studly("banking_account");
    }

    public function testJson($name){
        return response()->json(['name' => $name, 'state' => 'CA']);
        // return Response::json(['hello' => $name], 200);
    }
}

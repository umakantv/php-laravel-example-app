<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use \Illuminate\Http\Response;

class TestController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        echo "Hey, the TestController class is created.";
    }

    public function test() {

        // Use library functions
        return \Illuminate\Support\Str::studly("umakant_vashishtha");
    }

    public function testJson($name){
        return response()->json(['name' => $name, 'state' => 'CA']);
        // return Response::json(['hello' => $name], 200);
    }
}

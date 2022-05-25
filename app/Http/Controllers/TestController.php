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
        // This shows that the controller class instance is created at the time of the request.
        echo "Hey, the TestController class is created.<br/>";
    }

    public function test() {

        $string = "umakant_vashishtha";
        $string = str_replace('_', ' ', $string);
        $string = ucwords($string);
        return $string;
        // Use library functions
        return \Illuminate\Support\Str::capita($string);
    }

    public function testJson($name){
        return response()->json(['name' => $name, 'state' => 'CA']);
        // return Response::json(['hello' => $name], 200); // Method Illuminate\Http\Response::json does not exist.

    }

    public static function joinStatusesForInClause(array $statuses) {

        $statusesWithQuote = [];

        foreach ($statuses as $sub_status) {
            array_push($statusesWithQuote, '\''.$sub_status.'\'');
        }
        $clause = '('.join(',', $statusesWithQuote).')';
        return $clause;
    }

    public function getEntity() {
        return $this->getEntityClass();
    }
}

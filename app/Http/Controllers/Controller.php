<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function getEntityClass()
    {
        $class = get_called_class();
        echo $class." in ";

        $namespace = substr($class, 0, strrpos($class, "\\"));
        echo $namespace."<br />";

        return $namespace . '\\Entity';
    }
}

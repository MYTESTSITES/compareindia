<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{

    public function index(){
        return "This is a admin area";
    }
    
    public function print($string){
        return "You string is: $string";
    }
}

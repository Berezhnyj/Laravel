<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Request;

class ders extends Controller
{
    public function urlparametre($id){
        echo "gondrediginiz param" .$id;
    }
}

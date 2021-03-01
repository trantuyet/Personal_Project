<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ajaxController extends Controller
{
    public function index() {
        $msg = "Successfully!";
        return response()->json(array('msg' => $msg), 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    function show()
    {
        
        $departements = DB::table('departements')->get();

        return view('departements', ['departements' => $departements]);
    }
}

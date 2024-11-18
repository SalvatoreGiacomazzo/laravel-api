<?php

namespace App\Http\Controllers\api;

use App\Models\Wanted;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WantedController extends Controller
{
    public function index()
    {
        $wanted = Wanted::all();
        return response()->json([
            "success" => true,
            "results" => $wanted,

        ]);
    }
}

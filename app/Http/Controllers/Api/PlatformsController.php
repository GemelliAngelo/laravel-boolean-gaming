<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformsController extends Controller
{
    public function index()
    {

        $platforms = Platform::all();

        return response()->json(
            [
                'success' => true,
                'data' => $platforms,
            ]
        );
    }
}

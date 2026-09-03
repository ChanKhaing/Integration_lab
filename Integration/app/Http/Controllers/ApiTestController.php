<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiTestController extends Controller
{
        public function checkapi(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'API route is working!'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\SampleRequest;

class SampleController extends Controller
{
    public function sample1(SampleRequest $request)
    {
        logger($request);
        return response()->json(['message' => 'OK']);
    }
}

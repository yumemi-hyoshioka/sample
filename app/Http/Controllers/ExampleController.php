<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Requests\ExampleRequest;
use App\Facades\ExampleService;

class ExampleController extends Controller
{
    public function get(ExampleRequest $request) :JsonResponse
    {
        return response()->json(ExampleService::get($request));
    }
}

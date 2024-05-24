<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Son;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\SonResource;

class SonController extends Controller
{
    public function index(){
        return Son::all();
    }
    public function show(Son $son){
        return new SonResource($son);
    }
}

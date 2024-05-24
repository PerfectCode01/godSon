<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Don;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\DonResource;

class DonController extends Controller
{
    public function index (){
        return Don::all();
    }
    public function show(Don $don){
        return new DonResource($don);
    }
}

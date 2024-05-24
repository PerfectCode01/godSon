<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Artiste;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\ArtisteResource;

class ArtisteController extends Controller
{
    public function index(){
        return Artiste::all();
    }

    public function show(Artiste $artiste){
        return new ArtisteResource($artiste);
    }
}

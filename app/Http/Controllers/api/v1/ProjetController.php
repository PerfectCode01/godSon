<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Projet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\ProjetResource;

class ProjetController extends Controller
{
    public function index(){
        return Projet::all();
    }
    public function show(Projet $projet){
        return new ProjetResource($projet);
    }
}

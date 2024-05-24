<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Vote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\VoteResource;

class VoteController extends Controller
{
    public function index(){
        return Vote::all();
    }

    public function show(Vote $vote){
        return new VoteResource($vote);
    }
}

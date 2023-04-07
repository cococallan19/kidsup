<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;

use App\Http\Requests;

class VoteController extends Controller
{
    public function index(){

      $votes = Vote::where('vote_name','character2017')->get()->groupBy('vote_id');

      return view('vote.index')->with(compact('votes'));
    }

    public function store(Request $request){
      $data = $request->all();
      $vote = new Vote;
      $vote->ip = \Request::ip();
      $vote->vote_name = 'character2017';
      $vote->vote_id = $data['vote_id'];
      $vote->save();

      return $data;
    }
}

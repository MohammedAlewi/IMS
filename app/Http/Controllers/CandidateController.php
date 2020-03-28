<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Candidate as CandidateResource;
use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        return view('candidates.index');
    }

    public function get_progress()
    {
        if (Auth::user()->role!='candidate'){
            return redirect('/home')->with('error','Unauthorized!');
        }
        $candidate= Candidate::where('user_id',Auth::user()->id)->get();
        return CandidateResource::collection($candidate);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PendingUsers;
use App\Models\Candidate;
use App\Http\Resources\Candidate as CandidateResource;
use App\Models\Votes;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([]);
    }


    public function index()
    {
        if (Auth::user()->role!='admin'){
            return redirect('/home')->with('error','Unauthorized!');
        }

        return view("admin.index");
    }


    public function destroy()
    {
        if (Auth::user()->role!='admin'){
            return redirect('/home')->with('error','Unauthorized!');
        }

        Auth::user()->destroy();
        return "Account deleted successfully...";
    }


    //-----------------------------------------------------


    public function getPendingUsers(){
        if (Auth::user()->role!='admin'){
            return redirect('/home')->with('error','Unauthorized!');
        }

        $users=User::where("role","guest")->get();
        return PendingUsers::collection($users);
    }


    public  function  activateAccount(Request $request){
        if (Auth::user()->role!='admin'){
            return redirect('/home')->with('error','Unauthorized!');
        }
        // return
        $user=User::find($request->input('id'));
        $user->role=$request->input('role');
        $user->save();

        if ($request->input('role')=='candidate'){
            Candidate::create(['user_id'=>$user->id]);
        }

        return  new PendingUsers($user);
    }

    public  function  getProgress(){
        if (Auth::user()->role!='admin'){
            return redirect('/home')->with('error','Unauthorized!');
        }

        $candidates=Candidate::all();
        return CandidateResource::collection($candidates);
    }


    public function info(){
        if (Auth::user()->role!='admin'){
            return redirect('/home')->with('error','Unauthorized!');
        }

        return [
            "votted"=>count(Votes::where("used",true)->get()),
            "cureent_voters"=>count(User::where("role","voter")->get()),
            "candidates"=>count(User::where("role","candidate")->get()),
            "witnesses"=>count(User::where("role","witness")->get()),
            "unused_token"=>count(Votes::where("used",false)->get())
        ];
    }


}

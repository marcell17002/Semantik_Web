<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\UserDetail;


class ConnectionController extends Controller
{
    public function showPeople (){
        $users = DB::table('users')
        ->join('user_details','users.id','=','user_details.user_id')
        ->select('users.*','user_details.*')->inRandomOrder()->take(4)->get();

        return view('connection', ['users' => $users]);
    }
}

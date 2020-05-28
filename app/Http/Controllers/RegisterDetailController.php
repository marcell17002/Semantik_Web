<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetail;
use Illuminate\Support\Facades\Auth;

class RegisterDetailController extends Controller
{
    public function userDetails(Request $data){
        $user = Auth::user();
       $userDetails = new UserDetail;

       $userDetails->user_id = $user->id;
       $userDetails->workplace = $data->workplace;
       $userDetails->organization = $data->organization;
       $userDetails->education = $data->education;
       $userDetails->bio = $data->bio;
       $userDetails->save();

       return redirect('/');
    }
}

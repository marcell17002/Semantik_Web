<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\UserDetail;
use App\User;
use App\Certification;
use App\CertificationUser;

class ProfileController extends Controller
{
    public function showProfileData($username){
        $user = Auth::user();
        $userDetails = UserDetail::where('user_id', $user->id)->first();
        $certifUser = CertificationUser::where('user_id', $user->id)->first();
        $certif = Certification::where('certif_id', $certifUser->certif_id)->first();
        return view('profile',
         [
            'userDetails' => $userDetails,
            'user' => $user,
            'certifUser' => $certifUser,
            'certif' => $certif,
         ]);
    }
}

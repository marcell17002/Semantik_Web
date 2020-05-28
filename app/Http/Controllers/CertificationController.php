<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Certification;
use Illuminate\Support\Facades\Auth;
use App\CertificationUser;

class CertificationController extends Controller
{
    public function index(){
        $certifications = Certification::all();
        return view('certification', ['certifications' => $certifications]);
    }

    public function show($url){
        $certificationDetails = Certification::where('url', $url)->first(); //pakek first supaya bisa dipanggil tanpa foreach dan keluarnya cuman 1

        return view('certification-pick' , ['details' => $certificationDetails]);
    }

    public function userGotCertif(Request $data){
        $user = Auth::user();
        $certif = Certification::where('url', $data->url)->first();
        $certifUser = new CertificationUser;

        $certifUser->user_id = $user->id;
        $certifUser->certif_id = $certif->certif_id;
        $certifUser->save();

        return redirect('/');
    }
}

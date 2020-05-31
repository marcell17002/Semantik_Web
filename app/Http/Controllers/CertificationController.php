<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index(){
        $response = Http::get('http://localhost:8000/api/certification');

        
        return view('certification', ['certifications' => $response]);
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

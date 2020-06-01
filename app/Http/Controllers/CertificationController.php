<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index(){
        \EasyRdf_Namespace::set('ab', 'http://learningsparql.com/ns/certification#');
        \EasyRdf_Namespace::set('s', 'http://learningsparql.com/ns/data#');
        $sparql = new \EasyRdf_Sparql_Client('http://localhost:3030/certiv/sparql');

    $query = 'SELECT ?judul ?category ?tanggal ?harga ?link WHERE {'.
        '?certif ab:name ?judul .'.
          '?certif	ab:category ?category . ' .
          '?certif ab:price ?harga . ' .
          '?certif ab:date ?tanggal . ' .
          '?certif ab:url ?link ' .
    '}';

        $result = $sparql->query($query);
        return view('certification', ['certifications' => $result]);
    }

    public function show($url){
        \EasyRdf_Namespace::set('ab', 'http://learningsparql.com/ns/certification#');
        \EasyRdf_Namespace::set('s', 'http://learningsparql.com/ns/data#');

        $sparql = new \EasyRdf_Sparql_Client('http://localhost:3030/certiv/sparql');

        $query = 'SELECT ?certif ?judul ?category ?tanggal ?harga WHERE {'.
            '?certif ab:url "'.$url.'" .'.
            '?certif ab:name ?judul .'.
              '?certif	ab:category ?category . ' .
              '?certif ab:price ?harga . ' .
              '?certif ab:date ?tanggal ' .
        '}';
        
        $result = $sparql->query($query);

        return view('certification-pick' , ['details' => $result]);
    }

    public function pencarian(Request $request){
        \EasyRdf_Namespace::set('ab', 'http://learningsparql.com/ns/certification#');
        \EasyRdf_Namespace::set('s', 'http://learningsparql.com/ns/data#');
        $sparql = new \EasyRdf_Sparql_Client('http://localhost:3030/certiv/sparql');
        
        $judul = $request->judul;
        
        $query = 'SELECT ?judul ?category ?tanggal ?harga ?link WHERE {'.
            '?certif ab:name "'.$judul.'" .'.
            '?certif ab:name ?judul .'.
              '?certif	ab:category ?category . ' .
              '?certif ab:price ?harga . ' .
              '?certif ab:url ?link . ' .
              '?certif ab:date ?tanggal ' .
        '}';
        
        $result = $sparql->query($query);
        
        return view('certification', ['certifications' => $result]);
    }
}

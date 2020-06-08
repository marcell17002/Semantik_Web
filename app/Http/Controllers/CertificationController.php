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
        \EasyRdf_Namespace::set('rdf', '<http://www.w3.org/1999/02/22-rdf-syntax-ns#>');
        $sparql = new \EasyRdf_Sparql_Client('http://localhost:3030/certiv/sparql');
        
        $judul = $request->judul;
        $option = $request->option;
        
        if($option == 'Nama'){
             
        $query = 'SELECT ?judul  ?category ?tanggal ?harga ?link WHERE {'.
            '?certif ab:name "'.$judul.'" .'.
            '?certif ab:name ?judul .'.
              '?certif ab:category ?category . ' .
              '?certif ab:price ?harga . ' .
              '?certif ab:url ?link . ' .
              '?certif ab:date ?tanggal . ' .
        '}';

        }else if ($option == 'Kategori'){
            $query = 'SELECT ?judul ?category ?tanggal ?harga ?link  WHERE {'.
                '?certif ab:name ?judul .'.
                  '?certif ab:category "'.$judul.'" . ' .
                  '?certif ab:category ?category .'.
                  '?certif ab:price ?harga . ' .
                  '?certif ab:url ?link . ' .
                  '?certif ab:date ?tanggal ' .
            '}';
           
        }else if ($option == 'Periode'){
            $query = 'SELECT ?judul ?category ?tanggal ?harga ?link  WHERE {'.
                '?certif ab:name ?judul .'.
                  '?certif ab:category ?category .'.
                  '?certif ab:price ?harga . ' .
                  '?certif ab:url ?link . ' .
                  '?certif ab:date "'.$judul.'" .' .
                  '?certif ab:date ?tanggal .'.
            '}';

        }else if ($option == 'Harga'){
            $query = 'SELECT ?judul ?category ?tanggal ?harga ?link  WHERE {'.
                '?certif ab:name ?judul .'.
                  '?certif ab:category ?category .'.
                  '?certif ab:price ?harga . ' .
                  '?certif ab:price "'.$judul.'" . ' .
                  '?certif ab:url ?link . ' .
                  '?certif ab:date ?tanggal ' .
            '}';        
        }

        $result = $sparql->query($query);

        foreach($result as $res){
            $queryRelated = 'SELECT distinct ?name ?related ?datebaru ?category ?categorybaru ?pricebaru ?taken ?namebaru ?link'.
                ' WHERE {'.
                '?ab ab:name ?name. '.
                '?ab ab:category ?category.'. 
                '?ab ab:related ?related. '.
                '?related ab:name ?namebaru. '.
                '?related ab:date ?datebaru. '.
                '?related ab:category ?categorybaru. '.
                '?related ab:price ?pricebaru.' .
                '?related ab:url ?link.' .
                'FILTER contains(?category,"'.$res->category.'") .'.
                '}';
            
            $resultRelated = $sparql->query($queryRelated); //mengambil data related
                }

        foreach($result as $res){
            $queryRelated = 'SELECT distinct ?name ?related ?datebaru ?category ?categorybaru ?pricebaru ?taken ?namebaru ?link'.
                ' WHERE {'.
                '?ab ab:name ?name. '.
                '?ab ab:category ?category.'. 
                '?ab ab:date ?datebaru. '.
                '?ab ab:price ?pricebaru.' .
                '?ab ab:takenby ?takenby. '.
                '?ab ab:url ?link .'.
                '?takenby ab:user ?namebaru. '.
                
                '}';
            
            $resultRelated1 = $sparql->query($queryRelated); //mengambil data related
                }
                if(isset($resultRelated)){
                    return view('certification', ['certifications' => $result, 'relates' => $resultRelated, 'relates1' => $resultRelated1]);
            }
              else
            return view('certification', ['certifications' => $result]);
    
       
       
        
    }
}
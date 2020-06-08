<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();

        return view('article', ['articles' => $articles]);
    }

    public function showArticle($url){
        $articles = Article::where('url', $url)->first();

        return view('article-pick', ['articles' => $articles]);
    }
}

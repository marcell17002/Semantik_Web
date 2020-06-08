<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleInputController extends Controller
{
    public function input(Request $data){
        $article = new Article;

        $article->judul = $data->judul;
        $article->header = $data->header;
        $article->isi = $data->isi;
        $article->url = $data->url;

        $article->save();

        return redirect('/inputArticle');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('welcome', compact('articles'));
    }

    public function show(Request $request, $id)
    {
        $article = Article::find($id);
        if(!$article) {
            return redirect('/');
        }
        return view('article', compact('article'));
    }
}

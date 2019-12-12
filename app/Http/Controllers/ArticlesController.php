<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
     $articles = Article::latest()->get();
     return view('articles.index',['articles'=>$articles]);
    }


    public function show(Article $article)
    {
     return view('articles.show',['article'=>$article]);
    }

    
    public function create()
    {
        return view('articles.create');
    }

    
    public function store()
    {
        $validatedAttributes=request()->validate([
            'title'=>'required',
            'excerpt'=>'required',
            'body'=>'required'
        ]);
        Article::create($validatedAttributes);
       return redirect('/articles');
    }

    public function edit(Article $article)
    {
     
        return view('articles.edit',['article'=>$article]);
    }

    
    public function update(Article $article)
    {
        $validatedAttributes=request()->validate([
            'title'=>'required',
            'excerpt'=>'required',
            'body'=>'required'
        ]);
        Article::update($validatedAttributes);

        return redirect('/articles');
    }

}



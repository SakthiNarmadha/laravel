<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;//  Tag model is associated with the ArticlesController 

class ArticlesController extends Controller
{
    public function index()
    {
        // to fetch  article that belongs to particular tag
        if(request('tag')) 
        {
            $articles =Tag::where('name',request('tag'))->firstOrFail()->articles;
            
        }else
       
        {

     $articles = Article::latest()->get();
        }
     return view('articles.index',['articles'=>$articles]);
    }


    public function show(Article $article)
    {
     return view('articles.show',['article'=>$article]);
    }

    
    public function create()
    {
        //fetch all  the tag and store in a variable

        return view('articles.create',[
            'tags'=>Tag::all()
        ]);
    }

    
    public function store()
    {
        dd(request()->all());
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




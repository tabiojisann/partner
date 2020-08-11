<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\User;
use Storage;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Article::class, 'article');
    }

    public function index()
    {
        $articles = Article::all()->sortByDesc('created_at');
        $user     = Auth::user();
        return view('articles.index', ['articles' => $articles, 'user' => $user]);
    }

    public function create() 
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all());

        if(isset($image)) {
            $image = $request->file('image');
            $path = Storage::disk('s3')->putFile('articles', $image, 'public');
            $article->image = Storage::disk('s3')->url($path);
        }

        $article->user_id = $request->user()->id; 

        $article->save();  

        return redirect()->route('articles.index');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all());
        
        if(isset($image)) {
            $image = $request->file('image');
            $path = Storage::disk('s3')->putFile('articles', $image, 'public');
            $article->image = Storage::disk('s3')->url($path);
      
        }
     
        
        $article->save();
        return redirect()->route('articles.index');
    }

    public function destroy(Article $article)
    {

        $url = Storage::disk('s3')->url($article->image);

        // dd($url);

        Storage::delete($url);
       
        $article->delete();

        return redirect()->route('articles.index');
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

}


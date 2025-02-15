<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\http\Requests\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles=Article::all();
        return view('articles.index',data: compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        // $request->validate([
        //     "designation"=>["required","string","min:3"],
        //     "prix_ht"=>["required","numeric","min:5"]
        // ]);
        $articles = new Article();

        $articles->create($request->all());

        return redirect()->route("articles.index")->with("success","votre article est bien crée");
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));

    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Article $article)
    public function update(UpdateArticleRequest $request, Article $article)

    {
        // $request->validate([
        //     "designation"=>["required","string","min:3"],
        //     "prix_ht"=>["required","numeric","min:5"]
        // ]);

        $article->update($request->all());

        return redirect()->route("articles.index")->with("update","votre article est bien modifier");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route("articles.index")->with("destroy","votre article est bien supprimer");
    }
}

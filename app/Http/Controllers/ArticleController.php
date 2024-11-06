<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view("article.index", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view("article.create", compact("categories","tags"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $validated = $request->validated();
        $article = new Article();
        $article->title = $validated["title"];
        $article->body = $validated["body"];
        $article->category_id = $validated['category'];
        $article->save();

        $article->tags()->attach($validated['tags']);

        if($request->hasFile('image')) {
            $article->addMediaFromRequest('image')->toMediaCollection('article_images');
        }

        session()->flash('success','Successfully posted a new article.');

        return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);

        DB::transaction(function () use ($article) {
            $article->getFirstMedia('article_images')->delete();
            $article->delete();
        });
        
        session()->flash('success','Successfully deleted an article');
        return redirect()->route('admin.articles.index');
    }
}

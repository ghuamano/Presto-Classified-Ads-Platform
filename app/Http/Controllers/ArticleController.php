<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticleController extends Controller implements HasMiddleware
{
    /**
     * Display a listing of the resource.
     */
    public static function middleware(): array
    {
        return [
            new Middleware('auth', only: ['create'])];
    }

    public function index()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
{
    // Validazione dei dati
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'image' => 'nullable|image|max:2048',
    ]);

    // Aggiornamento dei dati dell'articolo
    $article->update([
        'title' => $request->title,
        'description' => $request->description,
        'price' => $request->price,
        'is_accepted' => NULL, 
    ]);

    // Se viene caricata una nuova immagine
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('articles', 'public');
        $article->update(['image' => $path]);
    }

    $article->setAccepted(null);
    // Recupera gli articoli dell'utente
    $articles = Article::where('user_id', auth()->id())->orderBy('created_at', 'desc')->paginate(6);

    // Recupera l'utente
    $user = auth()->user();

    // Restituisci la vista con gli articoli, l'utente e l'articolo aggiornato
    return view('user.profile', compact('articles', 'user', 'article'))->with('success', 'Articolo modificato e rimandato in revisione.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
    
        return redirect()->back()->with('success', 'Articolo eliminato con successo.');
    }

    public function byCategory(Category $category)
    {
        return view('article.byCategory',['articles' => $category->articles->where('is_accepted', true), 'category' => $category]);
    }

        public function byUser($userId)
    {
        // Recupera gli articoli dell'utente specificato
        $articles = Article::where('user_id', $userId)->where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
        $user = \App\Models\User::findOrFail($userId);

        return view('article.byUser', compact('articles', 'user'));
    }


    public function profile()
    {
        $articles = Article::where('user_id', auth()->id())->orderBy('created_at', 'desc')->paginate(6);
        $user = auth()->user();
        return view('user.profile', compact('articles', 'user'));
    }
}

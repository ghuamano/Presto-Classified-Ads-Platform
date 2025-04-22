<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Mail\ResponseToBeRevisor;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class RevisorController extends Controller 

{
    public function index(){
        $article_to_check = Article::where('is_accepted', NULL)->first();
        return view('revisor.index', compact('article_to_check'));
    }

    public function accept(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->back()->with('message', "hai accettato l'articolo: $article->title");
    }
    public function reject(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->back()->with('message', "Hai rifiutato l'articolo: $article->title");
    }



    public function revisorForm()
    {
        return view('become-revisor-form');
    }

    public function becomeRevisor(Request $request)
    {
        $request->validate([ 
            'message' => 'required|string|max:255',
            'attachment' => 'nullable|file|max:2048',
        ]);

        $attachment = null;
        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment')->store('attachments', 'public');
        }

        // Assicurati che il messaggio sia una stringa
        $message = $request->input('message'); // Qui ottieni il messaggio come stringa

        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(), $attachment, $message));
        Mail::to(Auth::user())->send(new ResponseToBeRevisor(Auth::user()));
        return redirect()->route('homepage')->with('message', 'hai richiesto di diventare revisor');
    }

    public function makeRevisor(User $user){
        
        Artisan::call('app:make-user-revisor', ['email' => $user->email]);
        return redirect()->back();
    }

    public function rejectRevisor(User $user){
        Artisan::call('app:reject-user-revisor', ['email' => $user->email]);
        return redirect()->back();
    }
}




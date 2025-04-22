<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class SetLocaleMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $localeLanguage = session('locale', 'it');
        App::setLocale($localeLanguage);
        return $next($request);
    }
}


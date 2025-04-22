<nav class="navbar navbar-expand-lg navbar-custom py-0">
    <div class="container-fluid">
        <a class="amatic-sc-bold" href="{{ route('homepage') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class="d-flex ms-auto" role="search" action="{{ route('article.search') }}" method="GET">
                <div class="input-group gap-2">
                    <input class="form-control rounded-pill px-5 mx-3" type="search" name="query"
                        placeholder="{{ __('ui.search') }}" aria-label="Search">
                </div>
                <button class="btn btn-nav px-4 py-2 mx-3" type="submit"><i class="bi bi-search"></i></button>

            </form>


            <ul class="navbar-nav ms-auto">





                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link" aria-current="page"
                        href="{{ route('articles.index') }}">{{ __('ui.allArticles') }}</a>
                </li>

                {{-- selezione per la visualizzazione o la creazione degli articoli --}}
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Annunci
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item drop-menu" href="{{ route('articles.create') }}">Crea un annuncio</a></li>
                        <li><a class="dropdown-item drop-menu" href="{{ route('articles.index') }}">Elenco annunci</a></li>

                    </ul>
                </li> --}}
                {{-- selezione per la visualizzazione degli annungi in base alla categoria --}}
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('ui.categories') }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item drop-menu"
                                    href="{{ route('byCategory', ['category' => $category]) }}">{{ __('ui.' . $category->slug) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                {{-- visualizzazione del niome utente e bottone di logout --}}


                @if (auth()->user() == null)
                    <li class="nav-item">
                        <a class="nav-link btn-nav px-4" href="{{ route('login') }}">{{ __('ui.login') }}</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link btn-nav px-3" href="{{ route('register') }}">Register</a>
                    </li> --}}
                @endif

                {{-- @if (auth()->user() != null)
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-nav px-3" type="submit">
                            Logout
                        </button>
                    </form>
                @endif --}}


                @if (auth()->user() != null)


                    {{-- <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                        <li class="nav-link"> <i class="bi bi-person-circle"></i> Ciao {{ Auth::user()->name }} </li>
                        @if (!Request::routeIs('articles.create'))
                            <li><a href="{{ route('articles.create') }}" class="btn btn-nav">Crea un annuncio</a>
                            </li>
                        @endif
                    </ul> --}}


                    <li class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-person-circle"></i> {{ __('ui.hello') }} {{ Auth::user()->name }}
                        
                        </a>
                        
                    


                        <ul class="dropdown-menu">

                            <li><a href="{{ route('articles.create') }}" class="dropdown-item drop-menu">
                                    {{ __('ui.createAd') }}
                                </a>
                            </li>

                            <li><a href="{{ route('profile') }}" class="dropdown-item drop-menu">
                                    {{ __('ui.goToProfile') }}
                                </a>
                            </li>

                            @if (Auth::check() && Auth::user()->is_revisor)
                                <div class="position-relative">
                                    <li>
                                        <a class="dropdown-item drop-menu"
                                            href="{{ route('revisor.index') }}">{{ __('ui.revisorZone') }}
                                            @if (\App\Models\Article::ToBeRevisedCount() > 0)
                                                <span
                                                    class="position-absolute top-50 end-0 translate-middle badge rounded-pill badgeColor">
                                                    {{ \App\Models\Article::ToBeRevisedCount() }}
                                                </span>
                                            @endif

                                        </a>
                                    </li>
                                </div>
                            @endif



                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="d-none px-3 py-1 mx-2" type="submit">
                                        <button type="submit" class="dropdown-item textColor2">
                                            {{ __('ui.logout') }}
                                        </button>
                                </form>
                            </li>

                        </ul>
                    </li>

                @endif
                {{-- bandiere nella navbar --}}
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-globe"></i>
                    </a>
                    <ul class="dropdown-menu custom-dropdown justify-content-center">

                        <li>
                            <a class="dropdown-item drop-menu"><x-_locale lang="it" /></a>
                        </li>
                        <li>
                            <a class="dropdown-item drop-menu"><x-_locale lang="en" /></a>
                        </li>
                        <li>
                            <a class="dropdown-item drop-menu"><x-_locale lang="es" /></a>
                        </li>

                    </ul>
                </li>

            </ul>



        </div>
    </div>
</nav>

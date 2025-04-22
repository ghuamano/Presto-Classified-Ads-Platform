<div class="card mx-auto card-w shadow text-center mb-3 product-card h-100">
    {{-- Immagine dell'articolo --}}
    <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : Storage::url('images/logo-presto.png') }}"
        class="card-img-top img-fluid max-height:100%  width:auto" alt="Immagine dell'articolo {{ $article->title }}">

    <div class="card-body">
        <h5 class="card-title"
            style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; max-height: 3.5rem; line-height: 1.5rem; margin-bottom: 0.5rem;">
            {{ $article->title }}</h5>
        <p class="card-text text-truncate">{{ $article->description }}</p>
        <p class="card-price">{{ $article->price ?? '$0.00' }} €</p>
        <div class="d-flex justify-content-evenly align-items-center mt-auto g-3 my-3">
            <!-- Dettagli dell'articolo -->
            <a href="{{ route('articles.show', compact('article')) }}" class="btn btn-card"><i
                    class="bi bi-eye-fill"></i> {{ __('ui.detail') }}</a>
            <!-- Categoria dell'articolo -->
            <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-card"><i
                    class="bi bi-tag-fill me-2"></i>{{ __('ui.' . $article->category->slug) }}</a>
        </div>
        {{$slot}}
        <!-- sezione creato da -->
        @if (!request()->routeIs('profile'))
        <div class="custom-footer">
            <small>
                Creato da <a href="{{ route('byUser', $article->user->id) }}">{{ $article->user->name }}</a>
            </small>
        </div>
        @endif

    </div>
</div>



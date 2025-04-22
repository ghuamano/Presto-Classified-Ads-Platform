<x-layout>
    <header class="bg-dark text-white text-center py-3">
        <h1>Profilo {{ $user->name }}</h1>
    </header>
    <main class="container mt-4">
        <div class="row height-custom justify-content-center align-items-center py-5">
            <!-- Sezione Profilo -->
            <div class="col-12 col-md-4 text-center">
                <div class="card p-3 shadow">

                    <div><i class="bi bi-person-circle textColor fs-1"></i></div>

                    {{-- @if ($user->profile_picture)
                        <img src="{{ asset($user->profile_picture) }}" alt="Foto profilo"
                            class="img-fluid rounded-circle mb-3">
                    @else
                        <img src="{{ Storage::url('images/default-profile.webp') }}" alt="Foto profilo predefinita"
                            class="img-fluid rounded-circle mb-3">
                    @endif --}}

                    <h2>{{ $user->name }}</h2>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    {{-- <a href="{{ route('profile.edit') }}" class="btn btn-card">Modifica Profilo</a> --}}
                </div>
            </div>

            <!-- Sezione Annunci -->
            <div class="container">
                <div class="row height-custom justify-content-center align-items-center py-5">
                    <h2 class="mb-3">I miei annunci</h2>
                    @forelse ($articles as $article)
                        <div class="col-12 col-md-4">
                            <x-card :article="$article">
                                    @if (Auth::check() && Auth::user()->id === $article->user_id)
                                        <a href="{{ route('article.edit', $article->id) }}" class="btn btn-nav my-2"><i class="bi bi-pencil-fill"></i>
                                            {{ __('ui.edit') }}</a>
                                        <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline" onsubmit="return confirm('{{ __('ui.confirm_delete') }}');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-nav my-2"><i class="bi bi-trash-fill"></i>
                                                {{ __('ui.delete') }}</button>
                                        </form>
                                    @endif
                            </x-card>
                        </div>
                    @empty
                    <div class="text-center">
                        <h3>{{ __('ui.userNoArticles') }}</h3>
                        <a href="{{ route('articles.create') }}" class="btn btn-nav mt-2">
                            {{ __('ui.createNow') }}
                        </a>
                    </div>
                    @endforelse
                </div>
            </div>
            <div>
                @if (session()->has('errorMessage'))
                    <div class="alert alert-danger text-center shadow rounded w-50">
                        {{ session('errorMessage') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div>
                {{ $articles->links() }}
            </div>
        </div>
    </main>
</x-layout>

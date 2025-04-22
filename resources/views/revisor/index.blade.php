<x-layout>

    <div class="container-fluid pt-5">
        <div class="row justify-content-center align-items-center ">
            <div class="col-12 col-md-6 mb-5">
                <div class="rounded shadow section-title">
                    <h1 class="display-5 text-center mb-2 fw-bold">
                        {{ __('ui.revisorZone') }}
                    </h1>
                </div>
            </div>
        </div>
        @if ($article_to_check)
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        @if ($article_to_check->images->count())
                            {{-- @foreach ($article_to_check->images as $key => $image)
                                <div class="col-6 col-md-4 mb-4">
                                    <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid rounded shadow"
                                        alt="immagine {{ $key + 1 }} dell' articolo '{{ $article_to_check->title }}">
                                </div>
                            @endforeach --}}
                            @foreach ($article_to_check->images as $key => $image)
                                <div class="col-6">
                                    <div class="mb-3 ">
                                        <div class="row g-0 ">
                                            <div class="col-12">
                                                <img src="{{ $image->getUrl(300, 300) }}"
                                                    class="img-fluid rounded-start"
                                                    alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                                            </div>
                                            @if ($image->labels)
                                            <div class="row">
                                                <div class="col-md-8 ps-3">
                                                    <div class="card-body">
                                                        <h5>Labels</h5>
                                                        @if ($image->labels)
                                                            @foreach ($image->labels as $label)
                                                                #{{ $label }},
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <div class="row">
                                                        <div class="card-body">
                                                            <h5>Ratings</h5>
                                                            <div class="row justify-content-center">
                                                                <div class="col-2">
                                                                    <div
                                                                        class="text-center mx-auto {{ $image->adult }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-10">adult</div>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <div class="col-2">
                                                                    <div
                                                                        class=" text-center mx-auto {{ $image->violence }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-10">violence</div>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <div class="col-2">
                                                                    <div
                                                                        class=" text-center mx-auto  {{ $image->spoof }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-10">spoof</div>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <div class="col-2">
                                                                    <div
                                                                        class=" text-center mx-auto {{ $image->racy }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-10">racy</div>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <div class="col-2">
                                                                    <div
                                                                        class=" text-center mx-auto {{ $image->medical }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-10">medical</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-6 col-md-4 mb-4 text-center">
                                <img src="{{ Storage::url('images/logo-presto.png') }}"
                                    class="img-fluid rounded shadow" alt="immagine segnaposto">
                            </div>
                        @endif
                        <div class="col-md-4 ps-4 d-flex flex-column justify-content-between text-center">
                            <div>
                                <h1>{{ $article_to_check->title }}</h1>
                                <h3> Autore: {{ $article_to_check->user->name }}</h3>
                                <h4>{{ $article_to_check->price }}€</h4>
                                <h4 class="fst-italic text-muted">{{ $article_to_check->category->name }}</h4>
                                <p class="h6">{{ $article_to_check->description }}</p>
                            </div>
                            {{-- aggiornamento revisor index --}}

                            {{-- fine aggiornamento revisor index --}}
                            <div class="d-flex pb-4 justify-content-around">
                                <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-nav fw-bold">{{ __('ui.accept') }}</button>
                                </form>
                                <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-card fw-bold">{{ __('ui.reject') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row justify-content-center align-items-center height-custom text-center mb-5">
                    <div class="col-12 section-title">
                        <h1 class="text-center fst-italic display-4">
                            {{ __('ui.noArticles') }}
                        </h1>
                        <a href="{{ route('homepage') }}" class="mt-5 btn btn-nav">{{ __('ui.backToHome') }}</a>
                    </div>
                </div>
        @endif
    </div>

    @if (session()->has('message'))
        <div class="row justify-content-center mb-5">
            <div class="col-5 alert alert-success text-center shadow rounded">
                {{ session('message') }}
            </div>
        </div>
    @endif

    {{-- AGGIORNAMENTO REVISOR INDEX --}}



</x-layout>

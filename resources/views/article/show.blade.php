<x-layout>
    <div class="container">
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12 py-5 my-2">
                <h1 class="display-4">{{__('ui.articleDetail')}}: {{ $article->title }}</h1>
            </div>

            <div class="col-12 col-md-6 mb-3">
                @if ($article->images->count() > 0)
                    <div class="d-flex flex-column align-items-center">
                        <!-- Immagine principale -->
                        <div class="main-image mb-3">
                            <img id="mainImage" src="{{ $article->images[0]->getUrl(300, 300) }}" class="img-fluid rounded shadow" alt="immagine principale dell'articolo {{ $article->title }}">
                        </div>

                        <!-- Galleria di anteprime -->
                        <div class="row justify-content-evenly">
                            @foreach ($article->images as $key => $image)
                                <div class="col-4 col-sm-3 col-md-2 mb-2">
                                    <img src="{{ $image->getUrl(300, 300) }}" class="img-thumbnail cursor-pointer" alt="anteprima {{$key + 1}} dell'articolo {{$article->title}}" data-image="{{ $image->getUrl(300, 300) }}" onclick="changeMainImage(this)">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <img class="default-img" src="{{ Storage::url('images/logo-presto.png') }}" alt="Nessuna foto inserita dall'utente">
                @endif
            </div>

            <div class="col-12 col-md-6 mb-3 text-center">
                <h2 class="display-5"><span class="fw-bold">{{__('ui.title')}}: </span> {{ $article->title }}</h2>
                <div class="d-flex flex-column justify-content-center h-75">
                    <h4 class="fw-bold">{{__('ui.price')}}: {{ $article->price }} €</h4>
                    <h5>{{__('ui.description')}}:</h5>
                    <p>{{ $article->description }}</p>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript per il cambio dell'immagine principale -->
    <script>
        function changeMainImage(thumbnail) {
            const imageUrl = thumbnail.getAttribute('data-image');

            document.getElementById('mainImage').src = imageUrl;
        }
    </script>
</x-layout>

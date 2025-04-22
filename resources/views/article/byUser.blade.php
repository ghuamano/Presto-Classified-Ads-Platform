<x-layout>
    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-2">{{__('ui.byUserArticle')}} <span class="fst-italic fw-bold drop-menu animated-text ">{{$user->name}}</span></h1>
            </div>
        </div>
        <div class="row justify-content-center aligne-items-center g-4 py-5">
            @forelse ($articles as $article)
            <div class="col-12 col-md-4">
                <x-card :article="$article"></x-card>
            </div>
            @empty
                <div class="col-12 text-center">
                    <h3>
                        {{__('ui.searchResultsNotFound')}}
                    </h3>
                    @auth
                        <a href="{{route('articles.create')}}" class="btn btn-dark my-5">{{ __('ui.createAd') }}</a>
                    @endauth
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
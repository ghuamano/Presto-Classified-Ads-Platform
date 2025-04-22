<x-layout>
    <div class="container ">
        <div class="row height-custom justify-content-center align-items-center text-center row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col-12 col-lg-12 py-5">
                <h1 class="display-1">{{__('ui.allArticles')}}</h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-lg-4 col-xl-4 col-md-6">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        {{__('ui.searchResultsNotFound')}}
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>
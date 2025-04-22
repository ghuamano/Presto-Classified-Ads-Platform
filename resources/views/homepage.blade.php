<x-layout>
    
    {{-- @auth
    <div class="text-center">
        <a href="{{ route('articles.create') }}" class="btn btn-primary ourBtn">Crea un annuncio</a>
    </div>
    @endauth --}}

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('message') }}
        </div>
        
    @endif
        <div class="container">
            <div class="row justify-content-center align-item-center">
                <div class="col-12">
                    {{-- <h1 class= "text-center" >Presto.it</h1> --}}

                    <x-carrousel/>

                    <div class="row height-custom justify-content-center align-items-center py-5">
                        @forelse ($articles as $article)
                            <div class="col-12 col-lg-4">
                                <x-card :article="$article"></x-card>
                            </div>
                        @empty
                            <div class="col-12">
                                <h3 class="text-center">{{__('ui.articleNone')}}</h3>
                            </div>
                        @endforelse
                    </div>

                    <div>
                        @if (session()->has('errorMessage'))
                            <div class="alert alert-danger text-center shadow rounded w-50">
                                {{ session('errorMessage') }}
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>


    
</x-layout>

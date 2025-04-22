<x-layout>
    <div class="container py-5">
        <div class="text-center">
            <h1 class="fw-bold mb-4">{{__('ui.aboutUsWelcome')}} <a class="text-decoration-none textColor fw-5" href="{{route('homepage')}}">Presto.it</a></h1>
            
            <p class="lead mt-2">
                {{__('ui.aboutUsWelcome')}} <a class="text-decoration-none textColor fw-5" href="{{route('homepage')}}">Presto.it</a>, {{__('ui.aboutUs1')}}
            </p>

            <p class="lead">
                {{__('ui.aboutUs2')}}
            </p>

            <p class="lead">
                {{__('ui.aboutUs3')}} <a class="text-decoration-none textColor fw-5" href="{{route('homepage')}}">Presto.it</a> {{__('ui.aboutUs4')}}
            </p>
        </div>
    </div>
</x-layout>

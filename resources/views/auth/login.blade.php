<x-layout>


    <section class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header form-custom">
                        <h3 class="text-center card-title fs-2">Login</h3>
                    </div>
                    <div class="card-body">

                        <form class="" action="{{ route('login.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label card-title mb-0">Indirizzo email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email"
                                    name="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label card-title mb-0">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    value="{{ old('password') }}">
                                @error('password')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="Check">
                                    <label class="form-check-label" for="Check">Remember me</label>
                                </div> --}}
                            <div id="create-user" class="mb-2 fw-semibold">Prima volta su Presto?, <a class="card-price fs-5 text-decoration-none" href="{{ route('register') }}"> Registrati</a></div>
                            <button type="submit" class="btn btn-custom">Invio</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-layout>

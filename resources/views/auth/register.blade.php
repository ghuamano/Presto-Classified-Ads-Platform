<x-layout>
    {{-- <x-elements.success-message /> --}}

    <section class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header form-custom">
                        <h3 class="text-center card-title fs-2">Crea il tuo account</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('register') }}" method="post">
                            {{-- el @csrf es obligatorio para evitar vulnerabilidades de seguridad --}}
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label card-title mb-0">Inserisci il tuo nome</label>
                                <input type="text" class="form-control" id="name" aria-describedby="name"
                                    name="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label card-title mb-0">Inerisci la tua email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email"
                                    name="email" value="{{ old('email') }}">
                                <div id="email" class="form-text fw-light">Non condivideremo mai il tuo indirizzo email
                                    con nessun altro.</div>
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
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label card-title mb-0">Conferma la tua
                                    Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" value="{{ old('password_confirmation') }}">
                                @error('password_confirmation')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="Check">
                                    <label class="form-check-label" for="Check">Remember me</label>
                                
                                </div> --}}
                            <div id="create-user" class="mb-2 fw-semibold">Hai già un account?, <a class="card-price fs-5 text-decoration-none" href="{{ route('login') }}">Accedi</a></div>
                            <button type="submit" class="btn btn-custom">Iscriviti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-layout>

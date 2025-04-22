<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="fw-bold mb-5">{{__('ui.contactUsWelcome')}}</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{route('contact.submit')}}" class="p-4 bg-light rounded shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label card-title">{{__('ui.name')}}</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label card-title">{{__('ui.email')}}</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label card-title">{{__('ui.message')}}</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom fs-5 px-5">{{__('ui.submit')}}</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

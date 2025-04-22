<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="fw-bold mb-5">{{__('ui.requestRevisor')}}</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('become.revisor') }}" class="p-4 bg-light rounded shadow" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="message" class="form-label card-title">{{ __('ui.talkAboutYou') }}</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="attachment" class="form-label btn btn-custom mb-0">{{ __('ui.enterYourCv') }}</label>
                        <input type="file" class="form-control" id="attachment" name="attachment">
                    </div>
                    <button type="submit" class="btn btn-custom fs-5 px-5">{{ __('ui.submit') }}</button>
                </form>
                
            </div>
        </div>
    </div>
</x-layout>

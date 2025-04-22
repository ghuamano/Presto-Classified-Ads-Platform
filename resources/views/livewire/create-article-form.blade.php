<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header form-custom">
                    <h3 class="text-center card-title fs-2">{{__('ui.createAd')}}</h3>
                </div>
                <div class="card-body">
                    <form class="" wire:submit="store">
                        <x-success-message></x-success-message>

                        <div class="bm-3">
                            <label for="title" class="form-label card-title mb-0">{{__('ui.title')}}</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                id="title" wire:model.blur="title">
                        </div>
                        @error('title')
                            <span class="fst-italic text-danger small">{{ $message }}</span>
                        @enderror
                        <div class="mb-3">
                            <label for="description" class="form-label card-title mb-0">{{__('ui.description')}}:</label>
                            <textarea id="description" cols="30" rows="10" class="form-control" wire:model="description"></textarea>
                        </div>
                        @error('description')
                            <span class="fst-italic text-danger small">{{ $message }}</span>
                        @enderror
                        <div class="mb-3">
                            <label for="image" class="form-label btn btn-custom mb-0 ">{{__('ui.image')}}:</label>
                            <input type="file" wire:model.live="temporary_images" id="image" multiple class="createInput form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="img/">
                            @error('temporary_image')
                            <span class="fst-italic text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        @if (!empty($images))
                            <div class="row">
                                <div class="col-12">
                                    <p class="card-title">{{__('ui.photoPreview')}}</p>
                                    <div class="row border border-4 border-success rounded shadow py-4">
                                        @foreach ($images as $key => $image)
                                        <div class="col d-flex flex-column align-items-center my-3">
                                            <div 
                                                class="img-preview mx-auto shadow rounded"
                                                style="background-image: url({{ $image->temporaryUrl() }});">
                                            </div>
                                            <button type="button" class="btn mt-1 btn-danger " wire:click="removeImage({{ $key }})">X</button>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="price" class="form-label card-title mb-0">{{__('ui.price')}}:</label>
                            <input type="text" class="form-control" id="price" wire:model="price">
                        </div>
                        @error('price')
                            <span class="fst-italic text-danger small">{{ $message }}</span>
                        @enderror
                        <div class="my-4">
                            <select id="category" wire:model="category" class="form-control card-title fs-6">
                                <option value="" selected disabled>{{__('ui.selectCategory')}}</option>
                                @foreach ($categories as $category)
                                    <option class="drop-menu" value="{{ $category->id }}">{{ __('ui.'.$category->slug) }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="fst-italic text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-custom fs-5 px-5">{{__('ui.submit')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

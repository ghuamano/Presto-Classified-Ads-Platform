<x-layout>
        <section class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-header form-custom">
                            <h3 class="text-center card-title fs-2">{{ __('ui.editAd') }}</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
    
                                <div class="bm-3">
                                    <label for="title" class="form-label card-title mb-0">{{ __('ui.title') }}</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $article->title) }}">
                                </div>
                                @error('title')
                                    <span class="fst-italic text-danger small">{{ $message }}</span>
                                @enderror
    
                                <div class="mb-3">
                                    <label for="description" class="form-label card-title mb-0">{{ __('ui.description') }}:</label>
                                    <textarea id="description" cols="30" rows="10" class="form-control" name="description">{{ old('description', $article->description) }}</textarea>
                                </div>
                                @error('description')
                                    <span class="fst-italic text-danger small">{{ $message }}</span>
                                @enderror

                                
    
                                <div class="mb-3">
                                    <label for="price" class="form-label card-title mb-0">{{ __('ui.price') }}:</label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $article->price) }}">
                                </div>
    
                                <div class="my-4">
                                    <select id="category" name="category_id" class="form-control card-title fs-6">
                                        <option value="" disabled>{{ __('ui.selectCategory') }}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>{{ __('ui.' . $category->slug) }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="fst-italic text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-custom fs-5 px-5">{{ __('ui.submit') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-layout>
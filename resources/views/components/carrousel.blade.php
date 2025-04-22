<div>


    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url({{Storage::url('Carrousel/img-1.jpg')}})">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="section-title">{{__('ui.motorAccessories')}}</h1>
                    <p>{{__('ui.motorAccessoriesDesc')}}</p>
                    <a href="{{ route('byCategory', 7) }}" class="btn btn-custom">{{__('ui.buyNow')}}</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url({{Storage::url('Carrousel/img-2.jpg')}}">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="section-title">{{__('ui.petsToys')}}</h1>
                    <p>{{__('ui.petsToysDesc')}}</p>
                    <a href="{{ route('byCategory', 8) }}" class="btn btn-custom">{{__('ui.buyNow')}}</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">{{__('ui.previous')}}</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">{{__('ui.next')}}</span>
        </button>
    </div>


</div>
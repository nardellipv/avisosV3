<div class="work-process-block ptb-100">
<div class="container ml-b-45">
        <div class="row">

            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="title-main">Últimos Servicios Publicados</h2>
                    <div class="divider">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach($lastServices as $lastService)
                <div class="col-lg-4 col-md-6">
                    <div class="todo-item">
                        <div class="todo-thumbnail-area">
                            <figure class="item-thumb">
                                @if($lastService->photo)
                                <img class="service-img"
                                    src="{{ asset('assets/users/' . $lastService->user_id . '/service/' . $lastService->photo) }}"
                                    alt="{{ $lastService->title }}">
                                    @else
                                    <img class="service-img"
                                    src="{{ asset('assets/img/sin_imagen.jpg') }}"
                                    alt="{{ $lastService->title }}">
                                    @endif
                            </figure>
                            <div class="todo-overlay-info">
                                <div class="todo-meta-bottom">
                                    <div class="todo-rating">
                                    <span>{{ $lastService->like != 0 ? number_format($lastService->visit / $lastService->like, 2) : 'N/A' }}</span> Rating
                                    </div>
                                    <div class="save">
                                        <a href="#" class="">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="todo-content same-size-topVisit">
                            <h3 class="title"><a href="listing-details.html">{{ $lastService->title }}</a></h3>
                            <div class="todo-price-status">
                                <div class="todo-status">{{ $lastService->category->name }}</div>
                            </div>
                            <div class="todo-meta">
                                <div class="todo-location">
                                    <span class="icon-location"></span>
                                    {{ $lastService->region->name }}
                                </div>
                                <div class="todo-number">
                                    <a href="" class="btn btn-default btn-blue">Ir al servicio</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

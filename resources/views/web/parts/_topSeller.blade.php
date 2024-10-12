<div class="todos-block bg-snow ptb-100">
    <div class="container ml-b-30">
        <div class="row">

            <div class="col-12">
                <div class="section-title text-center">
                    <h4 class="title-sub">Top-Rated Local Businesses</h4>
                    <h2 class="title-main">Servicios Más Visitados</h2>
                    <div class="divider">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach($topVisits as $visit)
                <div class="col-lg-4 col-md-6">
                    <div class="todo-item">
                        <div class="todo-thumbnail-area">
                            <figure class="item-thumb">
                                <img class="service-img"
                                    src="{{ asset('assets/users/' . $visit->user_id . '/service/' . $visit->photo) }}"
                                    alt="{{ $visit->title }}">
                            </figure>
                            <div class="todo-overlay-info">
                                <div class="todo-meta-bottom">
                                    <div class="todo-rating">
                                    <span>{{ number_format($visit->visit / $visit->like, 2) }}</span> Rating
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
                            <h3 class="title"><a href="listing-details.html">{{ $visit->title }}</a></h3>
                            <div class="todo-price-status">
                                <div class="todo-status">{{ $visit->category->name }}</div>
                            </div>
                            <div class="todo-meta">
                                <div class="todo-location">
                                    <span class="icon-location"></span>
                                    {{ $visit->region->name }}
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

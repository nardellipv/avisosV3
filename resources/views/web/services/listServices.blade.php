@extends('layouts.mainWeb')

@section('content')
<div class="page-title-area style-two pd-t-150 pd-b-45 bg-image bg-overlay"
    style="background-image:url('{{ asset($randomImage) }}')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-content">
                    <h2 class="page-title">Listado de Servicios</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="todo-grid-list-block ml-t-60 pd-b-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row todo-grid-list-content pd-t-120">
                    <div class="col-lg-8">
                        @foreach ($services as $service)
                            <div class="todo-item todo-item-list">
                                <div class="todo-thumbnail-area">
                                    <figure class="item-thumb">
                                        @if($service->photo)
                                            <img src="{{ asset('assets/users/' . $service->user_id . '/service/' . $service->photo) }}"
                                                alt="{{ $service->title }}">
                                        @else
                                            <img src="{{ asset('assets/img/sin_imagen.jpg') }}" alt="{{ $service->title }}">
                                        @endif
                                    </figure>
                                    <div class="todo-overlay-info">
                                        <div class="todo-meta-bottom">
                                            <div class="todo-rating">
                                                <span>{{ $service->like != 0 ? number_format($service->visit / $service->like, 2) : 'N/A' }}</span>
                                                Rating
                                            </div>
                                            <div class="save">
                                                <a href="#" class="">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="todo-content">
                                    <h3 class="title"><a href="listing-details.html">{{ $service->title }}</a></h3>
                                    <div class="todo-price-status">
                                        <div class="todo-status">{{ $service->category->name }}</div>
                                    </div>
                                    <div class="todo-meta">
                                        <div class="todo-location">
                                            <span class="icon-location"></span>
                                            {{ $service->region->name }}
                                        </div>
                                    </div>
                                    <div class="todo-summary">
                                        <p>{{ Str::limit($service->description, 100) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <nav class="paging-navigation pagination-center pd-t-70">
                            <ul class="nav-links">
                                <li>
                                    {{ $services->links('pagination::bootstrap-4') }}
                                </li>
                            </ul>
                        </nav>
                    </div>

                    @include('web.services._sidebar')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

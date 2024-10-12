<div class="col-lg-4">
    <div class="sidebar-todos mrt-md-60">

        <aside class="widget widget_todo_categories">
            <h4 class="widget-title">Categorías</h4>
            <div class="widget-content">
                <ul>
                    @foreach ($categories as $category)
                        <li class="cat-item">
                            <a href="#">{{ $category->name }}<span class="count">{{ $category->count }}</span></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>

        <aside class="widget widget_recent_view_todo">
            <h4 class="widget-title">Últimos Publicados</h4>
            <div class="widget-content">
                @foreach ($lastPublished as $lastServices)
                    <div class="todo-side-item todo-item">
                        <div class="todo-thumbnail-area">
                            <figure class="item-thumb">
                                @if($lastServices->photo)
                                    <img src="{{ asset('assets/users/' . $lastServices->user_id . '/service/' . $lastServices->photo) }}"
                                        alt="{{$lastServices->title}}">
                                @else
                                    <img src="{{ asset('assets/img/sin_imagen.jpg') }}" alt="{{$lastServices->title}}">
                                @endif
                            </figure>
                        </div>

                        <div class="todo-content">
                            <h3 class="title"><a href="listing-details.html">{{ $lastServices->title }}</a></h3>
                            <div class="todo-rating">
                                <span>{{ $lastServices->like != 0 ? number_format($lastServices->visit / $lastServices->like, 2) : 'N/A' }}</span>Ratings
                            </div>
                            <div class="todo-meta">
                                <div class="todo-location">
                                    <span class="icon-location"></span>
                                    {{ $lastServices->region->name }}
                                </div>
                                <div class="todo-status">{{ $lastServices->category->name }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </aside>
    </div>
</div>

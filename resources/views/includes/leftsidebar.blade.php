                    <div class="col-lg-4">
                        <div class="sidebar">
                            <aside class="widget-area">
                                <div class="sidebar__form sidebar__single wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    {{-- <h4 class="sidebar__title sidebar__form__title">search here</h4> --}}
                                            <form action="{{ url('/searchs') }}" method="GET" class="sidebar__search">
                                                <input type="search" id="search-input" name="query" placeholder="Search Here"><div id="search-input"></div>
                                                <button type="submit" aria-label="search submit" class="sidebar__search__icon">
                                                    <i class="icon-search"></i>
                                                </button>
                                            </form>
                                                @if(request()->has('query'))
                                                    @if(isset($posts))
                                                        @foreach($posts as $post)
                                                        <p class="d-none"> {{ $post->title }} - {{ $post->description }} </p>
                                                        @endforeach
                                                    @else
                                                        <p>No Result Found.</p>
                                                    @endif
                                                @endif

                                            
                                </div>
                                <div class="sidebar__posts-wrapper sidebar__single wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <h4 class="sidebar__title">Latest Updates</h4>
                                    <ul class="sidebar__posts list-unstyled">
                                        @foreach($latestposts->sortByDesc('created_at') as $post)
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                {{-- <img src="assets/images/blog/lp-1-1.jpg" alt="Latest posts"> --}}
                                                <img src="{{asset('public/image/posts/'.$post->image)}}" alt="$post->name">
                                            </div>
                                            <div class="sidebar__posts__content">
                                                <div class="sidebar__posts__meta"><a href="#"><span class="sidebar__posts__meta__icon"><i class="icon-user"></i></span>{{explode(' ', $post->user->name)[0]}} {{explode(' ', $post->user->name)[2]}}</a></div>
                                                <h4 class="sidebar__posts__title"><a href="{{route('info_posts', $post->id)}}">{{$post->title}}</a></h4>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="sidebar__categories-wrapper sidebar__single wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <h4 class="sidebar__title">Services</h4>
                                    <ul class="sidebar__categories list-unstyled">
                                        @if(isset($all_categories) && $all_categories)
                                        @foreach($all_categories->sortByDesc('created_at') as $cat)
                                        <li><a href="{{ route('list_updates', ['category_name' => $cat->name]) }}">{{$cat->name}}<span class="badge"></span></a></li>
                                        @endforeach
                                        @elseif(isset($categories) && $categories)
                                        @foreach($categories->sortByDesc('created_at') as $cat)
                                        <li><a href="{{ route('list_updates', ['category_name' => $cat->name]) }}">{{$cat->name}}<span></span></a></li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </div>
                                <div class="sidebar__tags-wrapper sidebar__single wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <h4 class="sidebar__title">Tags</h4>
                                    <div class="sidebar__tags">
                                        @foreach($allposts->sortByDesc('created_at') as $post)
                                        <a href="{{route('info_posts', $post->id)}}" class="ploming-btn">{{$post->title}}</a>
                                        @endforeach
                                    </div>
                                </div>
                                {{-- <div class="sidebar__comments-wrapper sidebar__single wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <h4 class="sidebar__title">Comments</h4>
                                    <ul class="sidebar__comments list-unstyled">
                                        <li class="sidebar__comments__item">
                                            <div class="sidebar__comments__icon">
                                                <i class="icon-massage"></i>
                                            </div>
                                            <h6 class="sidebar__comments__title">
                                                <a href="#">Neque porro est qui dolorem ipsum quia quaed inventor</a>
                                            </h6>
                                        </li>
                                        <li class="sidebar__comments__item">
                                            <div class="sidebar__comments__icon">
                                                <i class="icon-massage"></i>
                                            </div>
                                            <h6 class="sidebar__comments__title">
                                                <a href="#">Neque porro est qui dolorem ipsum quia quaed inventor</a>
                                            </h6>
                                        </li>
                                        <li class="sidebar__comments__item">
                                            <div class="sidebar__comments__icon">
                                                <i class="icon-massage"></i>
                                            </div>
                                            <h6 class="sidebar__comments__title">
                                                <a href="#">Neque porro est qui dolorem ipsum quia quaed inventor</a>
                                            </h6>
                                        </li>
                                    </ul>
                                </div> --}}
                            </aside>
                        </div>
                    </div>
<div class="col-md-3 col-md-offset-1">
    <div class="sidebar hidden-sm hidden-xs">
      <div class="widget">
        <h6 class="upper">Search blog</h6>
        <form action="{{ route('search.post.searchbar') }}" method="POST">
          @csrf
          <input name="search_bar" type="text" placeholder="Search.." class="form-control">
        </form>
      </div>
      <!-- end of widget        -->
      <div class="widget">
        <h6 class="upper">Categories</h6>
        <ul class="nav">
          @php
            $all_cat = App\Models\Category::where('status', true) -> take(7) -> latest() -> get();
          @endphp

          @foreach ($all_cat as $cat)
          <li><a href="{{ route('search.post.category', $cat -> slug) }}">{{ $cat -> name }}</a></li>
          @endforeach


        </ul>
      </div>
      <!-- end of widget        -->
      <div class="widget">
        <h6 class="upper">Popular Tags</h6>
        <div class="tags clearfix">
          @php
          $all_tag = App\Models\Tag::where('status', true) -> take(7) -> latest() -> get();
          @endphp

          @foreach ($all_tag as $tag)
          <a href="{{ route('search.post.tag', $tag -> slug) }}">{{ $tag -> name }}</a>
          @endforeach


        </div>
      </div>
      <!-- end of widget      -->
      <div class="widget">
        <h6 class="upper">Popular Posts</h6>
        <ul class="nav">
          @php
          $all_post = App\Models\Post::where('status', true) -> where('trash', false)->orderBy('post_views', 'DESC')-> take(7) -> latest() -> get();


          @endphp

          @foreach ($all_post as $posts)
          <li><a href="{{route('single.blog-view', $posts -> slug)  }}">{{ $posts -> title }} <i class="ti-arrow-right"></i>
            <br>
            <span style="display:inline-block;"> {{ date('d M Y', strtotime($posts -> created_at)) }} </span>

            <span style="display:inline-block;"> <span><strong>.</strong></span>read({{ $posts-> post_views}}) </span></a>
          </li>
          @endforeach

        </ul>
      </div>
      <!-- end of widget          -->
    </div>
    <!-- end of sidebar-->
  </div>

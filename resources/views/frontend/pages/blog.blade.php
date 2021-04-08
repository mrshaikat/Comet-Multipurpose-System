@extends('frontend.layouts.app')

@section('main-section')
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="blog-posts">
          
          @foreach ($all_posts as $post )

          {{-- Feature json Data Decode --}}
          @php
            $featured = json_decode($post -> featured);
          @endphp
          <article class="post-single">
            <div class="post-info">
              
              {{-- Post Title --}}
              <h2><a href="#">{{ $post -> title }}</a></h2>
              <h6 class="upper"><span>BY</span><a href=""> {{ $post ->user -> name }}</a><span class="dot"></span><span>{{ date('d F Y', strtotime($post -> created_at)) }}</span><span class="dot"></span>
                <a href="#" class="post-tag">@foreach ($post ->categories as $cat)
                {{ $cat -> name }} |
               @endforeach</a></h6>
            </div>

        
            {{-- Post Image Show --}}
            @if($featured -> post_type == 'Image')
            <div class="post-media">
              <a href="#">
                <img src="{{ URL::to('') }}/admin/media/posts/{{ $featured -> post_img }}" alt="{{ $featured -> post_type  }}">
              </a>
            </div>
            @endif

            

            {{-- Post Gallery Image Show --}}
            @if($featured -> post_type == 'Gallery')
            <div class="post-media">
              <div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true" class="flexslider nav-outside">
                <ul class="slides">

                  @foreach ( $featured -> post_gall as $gallery)
                  <li>
                    <img style="height: 470px;" src="{{ URL::to('') }}/admin/media/posts/{{ $gallery }}" alt="{{ $featured -> post_type }}">
                  </li>
                  @endforeach
                 
                 
                </ul>
              </div>
            </div>
            @endif

          
            @if( $featured -> post_type == 'Video' )
            <div class="post-media">
                <div class="media-video">
                  <iframe src="{{ $featured -> post_video }}" frameborder="0"></iframe>
                </div>
            </div>
            @endif 
            


            {{-- Post Content --}}
            <div class="post-body">
              {!! Str::of(htmlspecialchars_decode($post -> content)) -> words(40) !!}
              <p><a href="#" class="btn btn-color btn-sm">Read More</a>
              </p>
            </div>
          </article>
          @endforeach
         
        </div>


        {{-- Pagination --}}

        {{ $all_posts -> links() }}
        <ul class="pagination">
          <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="ti-arrow-left"></i></span></a>
          </li>
          <li class="active"><a href="#">1</a>
          </li>
          <li><a href="#">2</a>
          </li>
          <li><a href="#">3</a>
          </li>
          <li><a href="#">4</a>
          </li>
          <li><a href="#">5</a>
          </li>
          <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="ti-arrow-right"></i></span></a>
          </li>
        </ul>
        <!-- end of pagination-->
      </div>
      
      {{-- Sidebar --}}

      @include('frontend.layouts.partials.sidebar')





    </div>
    <!-- end of row-->
  </div>
  <!-- end of container-->
</section>
@endsection
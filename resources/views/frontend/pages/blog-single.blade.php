@extends('frontend.layouts.app')
@section('post-title', $data -> title)
@section('post-category', $data->user->name)
@section('main-section')
<section>
    <div class="container">

      <div class="row">
        <div class="col-md-8">
          <article class="post-single">
            @php
            $featured = json_decode($data->featured);
            @endphp

            <div class="post-info">
              <h2><a href="#">{{ $data -> title }}</a></h2>
              <h6 class="upper"><span>By</span><a href="#"> {{ $data->user->name }}</a><span class="dot"></span><span>{{ date('d F Y', strtotime($data -> created_at)) }}</span><span class="dot"></span><a href="#" class="post-tag">@foreach ($data ->categories as $cat)
                {{ $cat -> name }} |
               @endforeach</a></h6>
            </div>
            <div class="post-media">

            {{-- Post Image Show --}}
            @if($featured->post_type=='Image')
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

            </div>
            @endif
            <div class="post-body">
                {!! Str::of(htmlspecialchars_decode($data -> content)) !!}
            </div>
          </article>

          <!-- end of article-->
          <div id="comments">
            <h5 class="upper">3 Comments</h5>
            <ul class="comments-list">
              <li>
                <div class="comment">
                  <div class="comment-pic">
                    <img src="{{ URL::to('frontend/') }}/images/team/1.jpg" alt="" class="img-circle">
                  </div>
                  <div class="comment-text">
                    <h5 class="upper">Jesse Pinkman</h5><span class="comment-date">Posted on 29 September at 10:41</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime distinctio et quam possimus velit dolor sunt nisi neque, harum, dolores rem incidunt, esse ipsa nam facilis eum doloremque numquam veniam.</p><a href="#" class="comment-reply">Reply</a>
                  </div>
                </div>
                <ul class="children">
                  <li>
                    <div class="comment">
                      <div class="comment-pic">
                        <img src="{{ URL::to('frontend/') }}/images/team/2.jpg" alt="" class="img-circle">
                      </div>
                      <div class="comment-text">
                        <h5 class="upper">Arya Stark</h5><span class="comment-date">Posted on 29 September at 10:41</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque porro quae harum dolorem exercitationem voluptas illum ipsa sed hic, cum corporis autem molestias suscipit, illo laborum, vitae, dicta ullam minus.</p><a href="#"
                        class="comment-reply">Reply</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <div class="comment">
                  <div class="comment-pic">
                    <img src="{{ URL::to('frontend/') }}/images/team/3.jpg" alt="" class="img-circle">
                  </div>
                  <div class="comment-text">
                    <h5 class="upper">Rust Cohle</h5><span class="comment-date">Posted on 29 September at 10:41</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti sit beatae natus! Beatae velit labore, numquam excepturi, molestias reiciendis, ipsam quas iure distinctio quia, voluptate expedita autem explicabo illo.</p>
                    <a
                    href="#" class="comment-reply">Reply</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- end of comments-->
          <div id="respond">
            <h5 class="upper">Leave a comment</h5>
            <div class="comment-respond">
              <form class="comment-form">
                <div class="form-double">
                  <div class="form-group">
                    <input name="author" type="text" placeholder="Name" class="form-control">
                  </div>
                  <div class="form-group last">
                    <input name="email" type="text" placeholder="Email" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <textarea placeholder="Comment" class="form-control"></textarea>
                </div>
                <div class="form-submit text-right">
                  <button type="button" class="btn btn-color-out">Post Comment</button>
                </div>
              </form>
            </div>
          </div>
          <!-- end of comment form-->
        </div>
        @include('frontend.layouts.partials.sidebar')
      </div>
      <!-- end of row-->

    </div>
  </section>
@endsection

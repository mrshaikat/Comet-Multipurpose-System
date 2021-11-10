<section class="page-title parallax">
    <div data-parallax="scroll" data-image-src="{{ URL::to('') }}/frontend/assets/images/bg/33.jpg" class="parallax-bg"></div>
    <div class="parallax-overlay">
      <div class="centrize">
        <div class="v-center">
          <div class="container">
            <div class="title center">
              <h1 class="upper"> @yield('post-title','THIS IS BLOG')
                <span class="red-dot"></span></h1>
              <h4>
                Created By @yield('post-category')


              </h4>
              <hr>
            </div>
          </div>
          <!-- end of container-->
        </div>
      </div>
    </div>
  </section>

@extends('frontend.layouts.app')

@section('main-section')
<section id="home">
    <!-- Home Slider-->
    <div id="home-slider" class="flexslider">
      <ul class="slides">
        <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0.698574; display: block; z-index: 2;"><div class="slide-image" style="background-image: url(&quot;{{ URL::to('/') }}/frontend/assets/images/bg/1.jpg&quot;);"></div>

          <div class="slide-wrap">
            <div class="slide-content">
              <div class="container">
                <h1>Digital Power<span class="red-dot"></span></h1>
                <h6>We are a small design studio from San Francisco.</h6>
                <p><a href="#" class="btn btn-light-out">Read More</a><a href="#" class="btn btn-color btn-full">Services</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0.301426; display: block; z-index: 1;"><div class="slide-image" style="background-image: url(&quot;{{ URL::to('/') }}/frontend/assets/images/bg/2.jpg&quot;);"></div>

          <div class="slide-wrap">
            <div class="slide-content">
              <div class="container">
                <h1>We Are Comet<span class="red-dot"></span></h1>
                <h6>Experts in web design and development.</h6>
                <p><a href="#" class="btn btn-color">Explore</a><a href="#" class="btn btn-light-out">Join us</a>
                </p>
              </div>
            </div>
          </div>
        </li>
      </ul>
    <ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#"><i class="ti-angle-left"></i></a></li><li class="flex-nav-next"><a class="flex-next" href="#"><i class="ti-angle-right"></i></a></li></ul></div>
    <!-- End Home Slider-->
  </section>

  <section id="about">
    <div class="container">
      <div class="title center">
        <h4 class="upper">We are driven by creative.</h4>
        <h2>Who We Are<span class="red-dot"></span></h2>
        <hr>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <p class="lead-text serif text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sed ad possimus magnam maiores. Ipsam quas velit blanditiis debitis consequuntur mollitia assumenda nam obcaecati illo! Dolores deleniti animi.</p>
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of section content-->
    </div>
    <!-- end of container-->
  </section>

  <section class="p-0 b-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-sm-4 img-side img-left mb-0">
          <div class="img-holder" style="background-image: url(&quot;{{ URL::to('/') }}/frontend/assets/images/bg/33.jpg&quot;);">

            <div class="centrize">
              <div class="v-center">
                <div class="title txt-xs-center">
                  <h4 class="upper">This is what we love to do.</h4>
                  <h3>Expertise<span class="red-dot"></span></h3>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of side background image-->
        <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
          <div class="services">
            <div class="row">
              <div class="col-sm-6 border-bottom border-right">
                <div class="service"><i class="icon-focus"></i><span class="back-icon"><i class="icon-focus"></i></span>
                  <h4>Branding</h4>
                  <hr>
                  <p class="alt-paragraph">Facilis doloribus illum quis, expedita mollitia voluptate non iure, perspiciatis repellat eveniet volup.</p>
                </div>
                <!-- end of service-->
              </div>
              <div class="col-sm-6 border-bottom">
                <div class="service"><i class="icon-layers"></i><span class="back-icon"><i class="icon-layers"></i></span>
                  <h4>Interactive</h4>
                  <hr>
                  <p class="alt-paragraph">Commodi totam esse quis alias, nihil voluptas repellat magni, id fuga perspiciatis, ut quia beatae, accus.</p>
                </div>
                <!-- end of service-->
              </div>
              <div class="col-sm-6 border-bottom border-right">
                <div class="service"><i class="icon-mobile"></i><span class="back-icon"><i class="icon-mobile"></i></span>
                  <h4>Production</h4>
                  <hr>
                  <p class="alt-paragraph">Doloribus qui asperiores nisi placeat volup eum, nemo est, praesentium fuga alias sit quis atque accus.</p>
                </div>
                <!-- end of service-->
              </div>
              <div class="col-sm-6 border-bottom">
                <div class="service"><i class="icon-globe"></i><span class="back-icon"><i class="icon-globe"></i></span>
                  <h4>Editing</h4>
                  <hr>
                  <p class="alt-paragraph">Aliquid repellat facilis quis. Sequi excepturi quis dolorem eligendi deleniti fuga rerum itaque.</p>
                </div>
                <!-- end of service-->
              </div>
            </div>
          </div>
          <!-- end of row-->
        </div>
      </div>
      <!-- end of row -->
    </div>
  </section>

  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-sm-4 img-side img-right">
          <div class="img-holder" style="background-image: url(&quot;{{ URL::to('/') }}/frontend/assets/images/bg/10.jpg&quot;);">

          </div>
        </div>
        <!-- end of side background image-->
      </div>
      <!-- end of row-->
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-8">
          <div class="title">
            <h4 class="upper">Not just code.</h4>
            <h3>The Vision<span class="red-dot"></span></h3>
            <hr>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="text-box">
                <h4 class="upper small-heading">Strategy</h4>
                <p>Natus totam adipisci illum aut nihil consequuntur ut, ducimus alias iusto facili.</p>
              </div>
              <!-- end of text box-->
            </div>
            <div class="col-sm-6">
              <div class="text-box">
                <h4 class="upper small-heading">Design</h4>
                <p>Nisi, ut commodi dolor, quae doloremque earum alias accusantium sint.</p>
              </div>
              <!-- end of text box-->
            </div>
            <div class="col-sm-6">
              <div class="text-box">
                <h4 class="upper small-heading">Skills</h4>
                <p>Nesciunt est eaque, expedita cum minima reprehenderit? Harum vero dolorum.</p>
              </div>
              <!-- end of text box-->
            </div>
            <div class="col-sm-6">
              <div class="text-box">
                <h4 class="upper small-heading">Power</h4>
                <p>Fuga ipsum, repellendus? Architecto commodi magni non nihil et iusto.</p>
              </div>
              <!-- end of text box-->
            </div>
          </div>
          <!-- end of row              -->
        </div>
      </div>
      <!-- end of row-->
    </div>
    <!-- end of container-->
  </section>

  <section id="portfolio" class="pb-0">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="title m-0 txt-xs-center txt-sm-center">
            <h2 class="upper">Selected Works<span class="red-dot"></span></h2>
            <hr>
          </div>
        </div>
        <div class="col-md-6">
          <ul id="filters" class="no-fix mt-25">
            <li data-filter="*" class="active">All</li>
            <li data-filter=".branding">Branding</li>
            <li data-filter=".graphic">Graphic</li>
            <li data-filter=".printing">Printing</li>
            <li data-filter=".video">Video</li>
          </ul>
          <!-- end of portfolio filters-->
        </div>
      </div>
      <!-- end of row-->
    </div>
    <div class="section-content pb-0">
      <div id="works" class="four-col wide mt-50" style="position: relative; height: 951.5px;">
        <div class="work-item branding video" style="position: absolute; left: 0px; top: 0px;">
          <div class="work-detail">
            <a href="portfolio-single-1.html">
              <img src="{{ URL::to('/') }}/frontend/assets/images/portfolio/1.jpg" alt="">
              <div class="work-info">
                <div class="centrize">
                  <div class="v-center">
                    <h3>Neleman Cava</h3>
                    <p>Branding, Video</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="work-item graphic printing" style="position: absolute; left: 475px; top: 0px;">
          <div class="work-detail">
            <a href="portfolio-single-1.html">
              <img src="{{ URL::to('/') }}/frontend/assets/images/portfolio/7.jpg" alt="">
              <div class="work-info">
                <div class="centrize">
                  <div class="v-center">
                    <h3>Sweet Lane</h3>
                    <p>Graphic, Printing</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="work-item printing branding" style="position: absolute; left: 951px; top: 0px;">
          <div class="work-detail">
            <a href="portfolio-single-1.html">
              <img src="{{ URL::to('/') }}/frontend/assets/images/portfolio/6.jpg" alt="">
              <div class="work-info">
                <div class="centrize">
                  <div class="v-center">
                    <h3>Jeff Burger</h3>
                    <p>Printing, Branding</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="work-item video graphic" style="position: absolute; left: 1427px; top: 0px;">
          <div class="work-detail">
            <a href="portfolio-single-1.html">
              <img src="{{ URL::to('/') }}/frontend/assets/images/portfolio/9.jpg" alt="">
              <div class="work-info">
                <div class="centrize">
                  <div class="v-center">
                    <h3>Juice Meds</h3>
                    <p>Video, Graphic</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="work-item branding graphic" style="position: absolute; left: 0px; top: 475px;">
          <div class="work-detail">
            <a href="portfolio-single-1.html">
              <img src="{{ URL::to('/') }}/frontend/assets/images/portfolio/11.jpg" alt="">
              <div class="work-info">
                <div class="centrize">
                  <div class="v-center">
                    <h3>Prisma</h3>
                    <p>Graphic, Branding</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="work-item printing graphic" style="position: absolute; left: 475px; top: 475px;">
          <div class="work-detail">
            <a href="portfolio-single-1.html">
              <img src="{{ URL::to('/') }}/frontend/assets/images/portfolio/10.jpg" alt="">
              <div class="work-info">
                <div class="centrize">
                  <div class="v-center">
                    <h3>Delirio Tropical</h3>
                    <p>Printing, Graphic</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="work-item printing branding" style="position: absolute; left: 951px; top: 475px;">
          <div class="work-detail">
            <a href="portfolio-single-1.html">
              <img src="{{ URL::to('/') }}/frontend/assets/images/portfolio/8.jpg" alt="">
              <div class="work-info">
                <div class="centrize">
                  <div class="v-center">
                    <h3>Amendoas</h3>
                    <p>Printing, Branding</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="work-item graphic video" style="position: absolute; left: 1427px; top: 475px;">
          <div class="work-detail">
            <a href="portfolio-single-1.html">
              <img src="{{ URL::to('/') }}/frontend/assets/images/portfolio/3.jpg" alt="">
              <div class="work-info">
                <div class="centrize">
                  <div class="v-center">
                    <h3>Hnina</h3>
                    <p>Graphic, Video</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- end of portfolio grid-->
    </div>
  </section>

  <section>
    <div class="container">
      <div class="title center">
        <h4 class="upper">Some of the best.</h4>
        <h3>Our Clients<span class="red-dot"></span></h3>
        <hr>
      </div>
      <div class="section-content">
        <div class="boxes clients">
          <div class="row">
            <div class="col-sm-4 col-xs-6 border-right border-bottom">
              <img src="{{ URL::to('/') }}/frontend/assets/images/clients/1.png" alt="" data-animated="true" class="client-image">
            </div>
            <div class="col-sm-4 col-xs-6 border-right border-bottom">
              <img src="{{ URL::to('/') }}/frontend/assets/images/clients/2.png" alt="" data-animated="true" data-delay="500" class="client-image fade-in-top">
            </div>
            <div class="col-sm-4 col-xs-6 border-bottom">
              <img src="{{ URL::to('/') }}/frontend/assets/images/clients/3.png" alt="" data-animated="true" data-delay="1000" class="client-image fade-in-top">
            </div>
            <div class="col-sm-4 col-xs-6 border-right">
              <img src="{{ URL::to('/') }}/frontend/assets/images/clients/4.png" alt="" data-animated="true" class="client-image">
            </div>
            <div class="col-sm-4 col-xs-6 border-right">
              <img src="{{ URL::to('/') }}/frontend/assets/images/clients/5.png" alt="" data-animated="true" data-delay="500" class="client-image fade-in-top">
            </div>
            <div class="col-sm-4 col-xs-6">
              <img src="{{ URL::to('/') }}/frontend/assets/images/clients/6.png" alt="" data-animated="true" data-delay="1000" class="client-image fade-in-top">
            </div>
          </div>
          <!-- end of row-->
        </div>
      </div>
      <!-- end of section content-->
    </div>
  </section>

  <section class="parallax">
    <div data-parallax="scroll" data-image-src="images/bg/7.jpg" class="parallax-bg"></div>
    <div class="parallax-overlay pb-50 pt-50">
      <div class="container">
        <div class="title center">
          <h3>What They Say<span class="red-dot"></span></h3>
          <hr>
        </div>
        <div class="section-content">
          <div id="testimonials-slider" data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true}" class="flexslider nav-outside">

          <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 800%; transition-duration: 0s; transform: translate3d(-1400px, 0px, 0px);"><li class="clone" aria-hidden="true" style="width: 700px; float: left; display: block;">
                <blockquote>
                  <p>"Dolorem natus, sint. Enim molestias expedita laboriosam perferendis possimus facere nostrum laudantium vero."</p>
                  <footer>Daenerys Targarien - Apple Inc.</footer>
                </blockquote>
              </li>
              <li style="width: 700px; float: left; display: block;" class="">
                <blockquote>
                  <p>"Blanditiis impedit omnis excepturi rem dolores! Ab consequuntur reiciendis eaque atque."</p>
                  <footer>Jon Snow - Google Inc.</footer>
                </blockquote>
              </li>
              <li class="flex-active-slide" style="width: 700px; float: left; display: block;">
                <blockquote>
                  <p>"Dolorem natus, sint. Enim molestias expedita laboriosam perferendis possimus facere nostrum laudantium vero."</p>
                  <footer>Daenerys Targarien - Apple Inc.</footer>
                </blockquote>
              </li>
            <li style="width: 700px; float: left; display: block;" class="clone" aria-hidden="true">
                <blockquote>
                  <p>"Blanditiis impedit omnis excepturi rem dolores! Ab consequuntur reiciendis eaque atque."</p>
                  <footer>Jon Snow - Google Inc.</footer>
                </blockquote>
              </li></ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="flex-active">2</a></li></ol></div>
        </div>
      </div>
      <!-- end of container-->
    </div>
  </section>

  <section>
    <div class="container">
      <div class="title center">
        <h4 class="upper">We have a few tips for you.</h4>
        <h2>The Blog<span class="red-dot"></span></h2>
        <hr>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="blog-post">
              <div class="post-body">
                <h3 class="serif"><a href="#">Checklists for Startups</a></h3>
                <hr>
                <p class="serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab corporis eos quod libero doloremque odio perspiciatis ratione cumque ex laboriosam, laborum accusantium quis quidem excepturi, adipisci neque, aliquam ea! [...]</p>
                <div class="post-info upper"><a href="#">Read More</a><span class="pull-right black-text">November 16, 2015</span>
                </div>
              </div>
              <!-- end of blog post-->
            </div>
            <div class="blog-post">
              <div class="post-body">
                <h3 class="serif"><a href="#">Never Tell People What You Do</a></h3>
                <hr>
                <p class="serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab corporis eos quod libero doloremque odio perspiciatis ratione cumque ex laboriosam, laborum accusantium quis quidem excepturi, adipisci neque, aliquam ea! [...]</p>
                <div class="post-info upper"><a href="#">Read More</a><span class="pull-right black-text">November 12, 2015</span>
                </div>
              </div>
              <!-- end of blog post-->
            </div>
          </div>
        </div>
        <!-- end of row-->
        <div class="clearfix"></div>
        <div class="mt-25">
          <p class="text-center"><a href="#" class="btn btn-color-out">View Full Blog          </a>
          </p>
        </div>
      </div>
      <!-- end of container-->
    </div>
  </section>








@endsection

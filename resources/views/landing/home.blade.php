@extends('landing.headerfooter')

@section('content')

<div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('landing/images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center ">
            <div class="col-md-5 mt-5 pt-5">
              <h1 class="mb-3">Digital Agency with Excellent Services.</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
              <p class="mt-5"><a href="/login" class="btn btn-primary">Sign In</a></p>
            </div>
            <div class="col-md-6 ml-auto">
              <div class="white-dots">
                <img src="{{asset('landing/images/img_2.jpg')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-7 mb-5">
            <h5 class="subtitle">Features</h5>
            <h2>A creative digital agency with excellence services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-home"></span>
              </span>
              <h3>Recusandae Cumque</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas ullam, cumque a debitis reiciendis dolorum ad minus error.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-face"></span>
              </span>
              <h3>Voluptas Ullam</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas ullam, cumque a debitis reiciendis dolorum ad minus error.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-drafts"></span>
              </span>
              <h3>Reiciendis Dolorum Minu</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas ullam, cumque a debitis reiciendis dolorum ad minus error.</p>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-12 text-center">
            <a href="#" class="btn btn-primary">View All Services</a>
          </div>
        </div>
      </div>
    </div>




    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h2 class="h5 mb-4">Your digital partner starts here.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente reprehenderit aspernatur, reiciendis explicabo doloribus aperiam sed sequi, aut repudiandae magni nobis voluptatem!</p>

            <div class="d-flex align-items-center">
              <span class="sign mr-4">
                <img src="{{asset('landing/images/signature.svg')}}" alt="" class="img-fluid">
              </span>
              <div>
                <span class="d-block font-weight-bold">Mr. John Doe</span>
                <span>CEO &amp; Co-Founder </span>
              </div>
            </div>
          </div>
          <div class="col-md-6 ml-auto">
            <h2 class="h5 mb-4">Our expertise and skills</h2>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>Writing</span>
                <span class="ml-auto">55%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>WordPress</span>
                <span class="ml-auto">85%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>Bootstrap</span>
                <span class="ml-auto">93%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 93%;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>jQuery</span>
                <span class="ml-auto">83%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('landing/images/hero_2.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <p class="lead text-white">Suscipit libero voluptate</p>
            <h2 class="text-white">Get ready to start your exciting journey. Our agency</h2>
          </div>
        </div>
        
      </div>
    </div>

    <div class="site-section counter-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="d-flex align-items-center counter">
              <span class="icon-building-o wrap-icon mr-3"></span>
              <div class="text">
                <span class="d-block number">14k</span>
                <span class="caption">number of firms</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="d-flex align-items-center counter">
              <span class="icon-home2 wrap-icon mr-3"></span>
              <div class="text">
                <span class="d-block number">2k</span>
                <span class="caption">in house crews</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="d-flex align-items-center counter">
              <span class="icon-code wrap-icon mr-3"></span>
              <div class="text">
                <span class="d-block number">3920k</span>
                <span class="caption">line of codes</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 text-center">
            <h3 class="section-heading text-center">News &amp; Events</h3>
            <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>

          </div>

        </div>
        <div class="row">
          <div class="col-12">

            <div class="nonloop-block-13 owl-carousel">
              <div class="news-1" style="background-image: url('landing/images/img_1.jpg');">
                <div class="text">
                  <h3><a href="#">Consectetur adipisicing elit</a></h3>
                  <span class="category d-block mb-3">Web Development</span>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>

              <div class="news-1" style="background-image: url('landing/images/img_2.jpg');">
                <div class="text">
                  <h3><a href="#">Consectetur adipisicing elit</a></h3>
                  <span class="category d-block mb-3">Web Development</span>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>

              <div class="news-1" style="background-image: url('landing/images/img_3.jpg');">
                <div class="text">
                  <h3><a href="#">Consectetur adipisicing elit</a></h3>
                  <span class="category d-block mb-3">Web Development</span>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>

              <div class="news-1" style="background-image: url('landing/images/img_3.jpg');">
                <div class="text">
                  <h3><a href="#">Consectetur adipisicing elit</a></h3>
                  <span class="category d-block mb-3">Web Development</span>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>


    

    <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url(landing/'images/hero_2.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-white section-heading primary-color-icon text-center">More Services</h2>
            <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quo doloribus, suscipit libero, voluptate aliquam.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="icon-attach_money"></span>
              </span>
              <div class="service-1-contents">
                <h3>Consectetur Adipisicing Elit</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="icon-build"></span>
              </span>
              <div class="service-1-contents">
                <h3>Obcaecati Laboriosam</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="icon-photo_camera"></span>
              </span>
              <div class="service-1-contents">
                <h3>Nostrum Suscipit Nobis</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="icon-redeem"></span>
              </span>
              <div class="service-1-contents">
                <h3>Harum Molestiae Optio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="icon-phonelink"></span>
              </span>
              <div class="service-1-contents">
                <h3>Nostrum Suscipit Nobis</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="icon-child_friendly"></span>
              </span>
              <div class="service-1-contents">
                <h3>Eaque Odit Molestias</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2 class="section-heading text-center">Our Top Client Says</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2 text-center">
              <div class="v-card mb-4 text-center">
                <img src="{{asset('landing/images/person_1.jpg')}}" alt="Image" class="img-fluid mx-auto d-block">
                <span>Mike Fisher</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2 text-center">
              <div class="v-card mb-4 text-center">
                <img src="{{asset('landing/images/person_2.jpg')}}" alt="Image" class="img-fluid mx-auto d-block">
                <span>Jean Stanley</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2 text-center">
              <div class="v-card mb-4 text-center">
                <img src="{{asset('landing/images/person_3.jpg')}}" alt="Image" class="img-fluid mx-auto d-block">
                <span>Katie Rose</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('landing/images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-white section-heading primary-color-icon text-center">Quality Services</h2>
            <p class="lead text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quo doloribus, suscipit libero, voluptate aliquam.</p>
            <p><a href="#" class="btn btn-primary">Contact Us Now</a></p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-white">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2 class="section-heading text-center">Our Blog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="{{asset('landing/images/img_1.jpg')}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="{{asset('landing/images/img_2.jpg')}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="{{asset('landing/images/img_3.jpg')}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
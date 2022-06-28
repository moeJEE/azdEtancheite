@extends('layouts.masterFront')

@section('content')
    <div class="site-wrapper-reveal">
        <!--============ Hero Start ============-->
        <div class="hero-slider-wrap architecture-hero-wrap">
            <div class="swiper-container hero-flexible__container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div
                    class="architecture-hero bg-img"
                    data-bg="assetsFront/images/hero/architecture-01.png"
                  >
                    <div class="container">
                      <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-8 col-md-9">
                          <!-- <div class="corporate-hero-text layer-animation-1">
                                    <h4 class="hero-sub-title">Join us today</h4>
                                    <h1 class="font-weight--bold mb-15 section-title">To find the better solutions for your business</h1>
                                    <div class="hero-button mt-30">
                                        <a href="#" class="ht-btn ht-btn-lg font-weight--bold">Contact us</a>
                                    </div>
                                </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div
                    class="architecture-hero bg-img"
                    data-bg="assetsFront/images/hero/architecture-02.png"
                  >
                    <div class="container">
                      <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-8 col-md-9">
                          <!-- <div class="corporate-hero-text layer-animation-2">
                                                <h4 class="hero-sub-title">Join us today</h4>
                                                <h1 class="font-weight--bold mb-15 section-title">To find the better solutions for your business</h1>
                                                <div class="hero-button mt-30">
                                                    <a href="#" class="ht-btn ht-btn-lg font-weight--bold">Contact us</a>
                                                </div>
                                            </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div
                    class="architecture-hero bg-img"
                    data-bg="assetsFront/images/hero/architecture-01.jpg"
                  >
                    <div class="container">
                      <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-8 col-md-9">
                          <!-- <div class="corporate-hero-text layer-animation-3">
                                                <h4 class="hero-sub-title">Join us today</h4>
                                                <h1 class="font-weight--bold mb-15 section-title">To find the better solutions for your business</h1>
                                                <div class="hero-button mt-30">
                                                    <a href="#" class="ht-btn ht-btn-lg font-weight--bold">Contact us</a>
                                                </div>
                                            </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Add Arrows -->
            </div>
    
            <div
              class="hero-swiper-pagination-number swiper-pagination__right"
            ></div>
            <style>
              .img {
                text-align: center;
                margin: auto;
                display: flex;
                position: absolute;
                bottom: -3px;
                left: 0;
                right: 0;
                margin: auto;
                z-index: 2;
              }
            </style>
            <img class="img" src="/assetsFront/images/blanc.png" alt="" />
          </div>
    
          <!--============ Hero End ============-->

        <!--============ About Area Start ============-->
        <div class="about-wrapper section-space--ptb_120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 dots-offset">
                        <div class="dots-image">
                            <div class="dots"></div>
                            <div class="dots-inner-images">
                                <img class="about-img img-fluid"
                                    src="{{ asset('assetsFront/images/bg/architecture-1-508x609.jpg') }}" alt="About Image" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-us-content about-us-offset small-mt__30 tablet-mt__30">
                            <div class="section-title-wrap">
                                <h6 class="section-sub-title">Azd etanchiete/h6>
                                <h3 class="mb-20 section-title">
                                    Une expérience solide en<br />
                                    matière de l'investissement
                                </h3>
                                <p class="mb-20 font-weight--light">
                                    Sayerh Archi Concept est un cabinet de conseil et de
                                    prestation de service dans les domaines de l'urbanisme, de
                                    l'architecture, des études de génie civile,Les études de
                                    lots techniques et controle, les études de voirie et réseaux
                                    divers et d'accompagnement des projets d'investissements
                                    dans divers secteurs d'activités
                                </p>

                                <div class="about-us-btn-box">
                                    <a href="{{url('/about')}}" class="ht-btn ht-btn-sm">Plus d'infos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============ About Area End ============-->

        <!--============ Our Work Process Area Start ============-->

        <!--============ Our Work Process Area End ============-->

        @include('partials.services')

        
<!--=========== Service Area Start ==========-->
    <div class="portfolio-area section-space--pb_120 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 order-1">
                    <div class="section-title-wrap text-center section-space--mb_40">
                        <h6 class="section-sub-title">Portfolio</h6>
                        <h3 class="section-title">Latest Projects</h3>
                    </div>
                </div>
                <br />

                <div class="col-md-3 order-2">
                    <div class="row">
                        <div class="messonry-button center section-space--mt_30">
                            <h5 class="filterV2">Domaines d’activités</h5>
                            
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <button data-filter="*" class="is-checked">
                                        <span class="filter-text"> All </span><span class="filter-counter"></span>
                                    </button>
                                </li>
                                @foreach ($categories as $categorie)
                                <li class="nav-item">
                                    <button>
                                        <span class="filter-text">{{$categorie->categorie}}</span>
                                    </button>
                                @endforeach                    
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 order-3">
                    <div class="masonry-activation">
                        <div class="row clearfix mesonry-list">
                            @foreach ($projets as $projet)
                            <div class="col-lg-4 col-md-6 masonary-item wow reveal">
                                <div class="portfolio-wrapper mt-30">
                                    <!--======= Single Portfolio Item Start ========-->
                                    <a class="single-portfolio-item"
                                    href="{{url('details', ['id'=>  $projet->id ])}}">

                                    >
                                        <div class="single-portfolio__thumbnail">
                                        <img src="{{asset('/storage/uploads/'.$projet->images)}}"  alt="" />

                                        </div>
                                        <div class="project-hover-01">
                                            <div class="inner-icon">
                                                <i class="fa fa-plus"></i>
                                            </div>
                                            <div class="post-overlay-info">
                                                <h5 class="post-overlay-title text-white">
                                                
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                    <!--===== Single Portfolio Item End =========-->
                                </div>
                            </div>
                            @endforeach      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== Portfolio Area End ==========-->

        <!--=========== fun fact Area Start ==========-->
        <div class="fun-fact-wrapper section-space--pt_90 section-space--pb_60 bg-img"
            data-bg="{{ asset('assetsFront/images/back.jpg') }}">
            <div class="">
                <div class="container">
                    <h3 class="h3-desc my-0 py-0 text-center">
                        Nous nous engageons à fournir des services <br> apporteurs d'une forte valeur ajoutée
                    </h3>
                </div>
            </div>
        </div>
        <!--=========== fun fact Area End ==========-->

        <!--============ Team Area Start ============-->
        <div class="about-wrapper section-space--ptb_120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 dots-offset">
                        <div class="dots-image">
                            <div class="dots"></div>
                            <div class="dots-inner-images">
                                <img class="about-img img-fluid"
                                src="{{ asset('assetsFront/images/bg/architecture-1-508x609.jpg') }}" alt="About Image" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-us-content about-us-offset small-mt__30 tablet-mt__30">
                            <div class="section-title-wrap">
                                <h6 class="section-sub-title">Azd etanchiete</h6>
                                <h3 class="mb-20 section-title">
                                    Une expérience solide en<br />
                                    matière de l'investissement
                                </h3>
                                <p class="mb-20 font-weight--light">
                                    Sayerh Archi Concept est un cabinet de conseil et de
                                    prestation de service dans les domaines de l'urbanisme, de
                                    l'architecture, des études de génie civile,Les études de
                                    lots techniques et controle, les études de voirie et réseaux
                                    divers et d'accompagnement des projets d'investissements
                                    dans divers secteurs d'activités
                                </p>

                                <div class="about-us-btn-box">
                                    <a href="#" class="ht-btn ht-btn-sm">Plus d'infos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============ Team Area End ============-->

        <!--============ Testimonials area Start ============-->

        <!--============ Testimonials area Start ============
    <!--==================== Lates Blog Area Start  ====================-->
        <div class="lates-blog-area section-space--pb_90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_60">
                            <h6 class="section-sub-title">Blog Post</h6>
                            <h3 class="section-title">
                                Read our story everyday <br />
                                with recent news
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- lates Single Blog Start-->
                        <div class="lates-single-blog mb-30">
                            <div class="blog-media">
                                <a href="#"><img class="img-fluid"
                                        src="{{ asset('assetsFront/images/blog/architecture-blog-01.jpg') }}"
                                        alt="blog image" /></a>
                            </div>
                            <div class="post-info lates-blog-post-info-02">
                                <div class="post-meta">
                                    <div class="post-date">
                                        <span class="other_name">Jhon Smith </span> - November 30,
                                        2019
                                    </div>
                                </div>

                                <h4 class="post-title font-weight--bold">
                                    <a href="#" class="title--default">Business Problems Solve</a>
                                </h4>

                                <div class="post-excerpt mt-15">
                                    <p>
                                        Electronic typesetting, remaining essentia lly was
                                        popularised in 1960s with the releas of letraset sheets to
                                        imporve business
                                    </p>
                                </div>
                                <div class="btn-text">
                                    <a href="#">10 Comments</a>
                                </div>
                            </div>
                        </div>
                        <!-- lates Single Blog End -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- lates Single Blog Start-->
                        <div class="lates-single-blog mb-30">
                            <div class="blog-media">
                                <a href="#"><img class="img-fluid"
                                        src="{{ asset('assetsFront/images/blog/architecture-blog-02.jpg') }}"
                                        alt="blog image" /></a>
                            </div>
                            <div class="post-info lates-blog-post-info-02">
                                <div class="post-meta">
                                    <div class="post-date">
                                        <span class="other_name">Ethan </span> - 15 November, 2019
                                    </div>
                                </div>

                                <h4 class="post-title font-weight--bold">
                                    <a href="#" class="title--default">New Business Trend</a>
                                </h4>

                                <div class="post-excerpt mt-15">
                                    <p>
                                        Electronic typesetting, remaining essentia lly was
                                        popularised in 1960s with the releas of letraset sheets to
                                        imporve business
                                    </p>
                                </div>
                                <div class="btn-text">
                                    <a href="#">35 Comments</a>
                                </div>
                            </div>
                        </div>
                        <!-- lates Single Blog End -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- lates Single Blog Start-->
                        <div class="lates-single-blog mb-30">
                            <div class="blog-media">
                                <a href="#"><img class="img-fluid"
                                        src="{{ asset('assetsFront/images/blog/architecture-blog-03.jpg') }}"
                                        alt="blog image" /></a>
                            </div>
                            <div class="post-info lates-blog-post-info-02">
                                <div class="post-meta">
                                    <div class="post-date">
                                        <span class="other_name">Jhon Smith </span> - November 30,
                                        2019
                                    </div>
                                </div>

                                <h4 class="post-title font-weight--bold">
                                    <a href="#" class="title--default">Latest Business Strategy</a>
                                </h4>

                                <div class="post-excerpt mt-15">
                                    <p>
                                        Electronic typesetting, remaining essentia lly was
                                        popularised in 1960s with the releas of letraset sheets to
                                        imporve business
                                    </p>
                                </div>
                                <div class="btn-text">
                                    <a href="#">18 Comments</a>
                                </div>
                            </div>
                        </div>
                        <!-- lates Single Blog End -->
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Lates Blog Area End  ====================-->

        <!--============= Brand Area Start ===============-->
        <div class="brand-area section-space--pb_90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 brand-box-wrap">
                        <div class="single-brand-box">
                            <a href="#"><img src="{{ asset('assetsFront/images/brand/client-logo-01.png') }}" alt="" /></a>
                        </div>
                        <div class="single-brand-box">
                            <a href="#"><img src="{{ asset('assetsFront/images/brand/client-logo-02.png') }}" alt="" /></a>
                        </div>
                        <div class="single-brand-box">
                            <a href="#"><img src="{{ asset('assetsFront/images/brand/client-logo-03.png') }}" alt="" /></a>
                        </div>
                        <div class="single-brand-box">
                            <a href="#"><img src="{{ asset('assetsFront/images/brand/client-logo-04.png') }}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============= Brand Area End ===============-->
    </div>
@endsection

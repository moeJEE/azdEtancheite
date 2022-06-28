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
                                    <a class="single-portfolio-item">
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

@endsection
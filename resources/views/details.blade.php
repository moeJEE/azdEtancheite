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
<section class="project-content">
    <div class="container">
      <h1 class="mainTitle">SHEMS DEROUA - DEROUA</h1>


      <div id="details" class="row">

        <div class="col-md-6">
          <div>
            <h2 class="subTitle">Description du projet</h2>
            <p class="desc">{{$projet->description}}
              </p>
          </div>

          <div>
            <h2 class="subTitle">Notre mission</h2>
            <p class="desc">{{$projet->mission}}
             </p>
          </div>
          <div>
            <h2 class="subTitle">COMPOSANTES</h2>
            <p class="desc">{{$projet->composantes}}
              </p>
          </div>
        </div>
        <div class="col-md-6">
          <h2 class="subTitle">Détails de projet</h2>
          <div class="row">
            <h5 class="col-3 sub_st">ANNEE:</h5>
            <p class="col-9 desc">{{$projet->annee}}</p>
          </div>
          <hr>

          <div class="row">
            <h5 class="col-3 sub_st">MAITRE D'OUVRAGE:</h5>
            <p class="col-9 desc">{{$projet->maitre_ouvrage}}</p>
          </div>
          <hr>

          <div class="row">
            <h5 class="col-3 sub_st">Catégorie:</h5>
            <p class="col-9 desc">{{$projet->categorie_id}}</p>
          </div>
          <hr>

          <div class="row">
            <h5 class="col-3 sub_st">SITUATION:</h5>
            <p class="col-9 desc">{{$projet->ville}}</p>
          </div>
          <hr>

          <div class="row">
            <h5 class="col-3 sub_st">SUPERFICIE:</h5>
            <p class="col-9 desc">123 HA</p>
          </div>
          <hr>

          <div class="row">
            <h5 class="col-3 sub_st">MONTANT D'INVESTISSEMENT:</h5>
            <p class="col-9 desc">{{$projet->montant_investissement}}</p>
          </div>
          <hr>

          <div class="row">
            <h5 class="col-3 sub_st">ETUDES DU PROJET:</h5>
            <p class="col-9 desc">{{$projet->etat_avancement}}</p>
          </div>
        </div>

       
      </div>
    </div>
    
  </section>

  <section class="project-gallery">
    <!-- Swiper -->
    <div class="container">
    <!-- Swiper -->
    <div class="swiper-container gallery-top">
      <div class="swiper-wrapper">
        <div class="swiper-slide"> <img src="{{asset('/storage/uploads/'.$projet->imageP)}}"
          /> </div>
       
      </div> 
      <!-- Add Arrows -->
      <div class="swiper-button-next swiper-button-white"></div>
      <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    {{-- <div class="swiper-container gallery-thumbs">
      <div class="swiper-wrapper">
        
        @foreach (json_decode($projet->images) as $images)
            
        <div class="swiper-slide"> <img src="{{asset('/storage/'.$images)}}" /> </div>
        
        @endforeach
      </div>
    </div> --}}
    </div>
  </section>
</div>
  @endsection
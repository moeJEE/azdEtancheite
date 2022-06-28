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
<section style="margin: 5%" id="contact m-3">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ url('/contact') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="nom">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Societe</label>
                    <input type="text" name="societe" class="form-control" placeholder="societe">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">email</label>
                  <input type="email" name="email" class="form-control"  placeholder="email">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">telephone</label>
                  <input type="text" name="telephone" class="form-control" placeholder="telephone">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Ville</label>
                    <input type="text" name="ville" class="form-control"  placeholder="ville" >               
                </div>
                             
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea name="message" class="form-control" ntrolTextarea1" rows="3"></textarea>
                  </div>
               
                <button type="submit" class="btn btn-primary btn-sm">Envoyer</button>
              </form>
        </div>
        <div class="col-md-6">
            <h3>
                Demander un devis
            </h3>
            <p>
                32, Boulevard Zoulikha Nasri, 5eme étage, LOT N°2 Florida Center Park de Sidi Maarouf, Casablanca - MAROC
            </p>

            <p>
                
Tél : +212 522 676 768 / Itinéraire 
</p>
<p>

    Email : contact@sayerh.com
</p>
        </div>
    </div>
</div>
</section>
        
<!--=========== Service Area Start ==========-->
  
    <!--=========== Portfolio Area End ==========-->

        <!--=========== fun fact Area Start ==========-->
        
        <!--=========== fun fact Area End ==========-->

        <!--============ Team Area Start ============-->
    
        <!--============ Team Area End ============-->

        <!--============ Testimonials area Start ============-->

        <!--============ Testimonials area Start ============
    <!--==================== Lates Blog Area Start  ====================-->
    
        <!--==================== Lates Blog Area End  ====================-->

        <!--============= Brand Area Start ===============-->
        
        <!--============= Brand Area End ===============-->
    </div>
@endsection
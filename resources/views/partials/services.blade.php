
<!--============ Service Area Start ============-->
<div class="services-wrapper services-hight-450 section-space--pt_120 bg-img"
    data-bg="{{ asset('assets1/images/bg/service-bg-02.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrap text-center">
                    <h6 class="section-sub-title">Our Services</h6>
                    <h3 class="mb-20 section-title">We are Specialized</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="service-content-inner-bottom section-space--pb_90">
    <div class="container">
        <div class="row">
            @foreach ($prestations as $prestation)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!-- Single Service Box Start -->
                 <div class="ht-service-box style-04 text-left single-svg-icon-box">
                    
               
                    <div class="service-icon">
                        <img src="{{asset('/storage/uploads/'.$prestation->logo)}}"  alt="" />
                    </div>
                    <div class="service-content">
                        <h4 class="section-title mb-20">{{$prestation->titre}}</h4>
                        <p>
                            {{$prestation->detail}}
                        </p>
                    </div>
                </div> 
                <!-- Single Service Box End -->
            </div>
            @endforeach 
        </div>
    </div>
</div>
<!--============ Service Area End ============-->


<style>
    strong p a{
        text-decoration: underline;
    }
</style>
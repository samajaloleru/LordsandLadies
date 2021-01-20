@extends('layouts.app')

@section('content')
    <div class="home-section fullwidth-slider-fade bg-dark" id="home">
                    
        <!-- Slide Item -->
        <section class="home-section bg-scroll bg-dark-alfa-50" data-background="img/bgImage19.JPG">
            <div class="js-height-full container">
                
                <!-- Hero Content -->
                <div class="home-content">
                    <div class="home-text">
                        <h2 class="hs-line-7 mb-50 mb-xs-30">
                            <span class="text-rotate">
                                Know more ..,
                                <?php echo $title; ?>,
                            </span>
                        </h2>
                        
                    </div>
                </div>
                <!-- End Hero Content -->

            </div>
        </section>
        <!-- End Slide Item -->
        
        <!-- Slide Item -->
        <section class="home-section bg-scroll bg-dark-alfa-30" data-background="img/bgImage15.JPG">
            <div class="js-height-full container">
                
                <!-- Hero Content -->
                <div class="home-content">
                    <div class="home-text">
                        <h2 class="hs-line-7 mb-50 mb-xs-30">
                            <span class="text-rotate">
                                Know more ..,
                                <?php echo $title; ?>,
                            </span>
                        </h2>
                        
                    </div>
                </div>
                <!-- End Hero Content -->
                
            </div>
        </section>
        <!-- End Slide Item -->
        
        <!-- Slide Item -->
        <section class="home-section bg-scroll bg-dark-alfa-30" data-background="img/bgImage7.JPG">
            <div class="js-height-full container">
                
                <!-- Hero Content -->
                <div class="home-content">
                    <div class="home-text">
                        <h2 class="hs-line-7 mb-50 mb-xs-30">
                            <span class="text-rotate">
                                Know more ..,
                                <?php echo $title; ?>,
                            </span>
                        </h2>
                        
                    </div>
                </div>
                <!-- End Hero Content -->
                
            </div>
        </section>
        <!-- End Slide Item -->

    </div>
    
    <section class="page-section">
        <div class="container relative">
            
            <div class="row section-text">
                <div class="col-md-8 col-md-offset-2 shadow">
                    <h2 class="section-title font-alt align-left mt-30 mb-20 ml-30">
                        About Studio
                    </h2>
                    <ul class="mt-40">
                        <li>Lords and ladies suit situated 5 mins away from university of Lagos and just 20mins ride to University of lagos  15 mins away from yaba college of technology 5 mins to third Mainland Bridge a lovely serene environment.</li>
                        <hr class="mb-30"/>
                        <li>Our Hotel has 2 floors with 10 rooms in a suite, making the hotel a very conductive gateway spot.</li>
                        <hr class="mb-30"/>
                        <li>Our hotel facilities and services extends much more than hotel rooms. We have a saloon, Karaoke, Laundry services.</li>
                        <hr class="mb-30"/>
                    </ul>
                    
                    <div class="about-padding">
                        <h5 class="font-alt about-title">For bookings and Reservations; Contact</h5>
                        <hr class="mb-30"/>
                        <p>
                            Whatsapp: &nbsp;&nbsp; +234 902 836 2347 
                        </p>
                        <p>
                            Call: &nbsp;&nbsp; +234 902 836 2347 
                        </p>
                        <p>
                            Email: &nbsp;&nbsp; lordsandladiessuites@gmail.com 
                        </p>
                        <p>
                            Instagram: &nbsp;&nbsp; Lordsandladiessuite 
                        </p>
                        <p>
                            Facebook: &nbsp;&nbsp; Lordsandladiessuites 
                        </p>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection

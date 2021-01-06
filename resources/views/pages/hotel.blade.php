@extends('layouts.app')

@section('content')
    <div class="home-section fullwidth-slider-fade bg-dark" id="home">
                    
        <!-- Slide Item -->
        <section class="home-section bg-scroll bg-dark-alfa-50" data-background="img/bgImage19.JPG">
            <div class="js-height-full container">
                
                <!-- Hero Content -->
                <div class="home-content">
                    <div class="home-text">
                        <h2 class="hs-line-14 font-alt mb-50 mb-xs-30">
                            <?php echo $title; ?>
                        </h2>
                        
                    </div>
                </div>
                <!-- End Hero Content -->

            </div>
        </section>
        <!-- End Slide Item -->
        
        <!-- Slide Item -->
        <section class="home-section bg-scroll bg-dark-alfa-30" data-background="img/bgImage5.JPG">
            <div class="js-height-full container">
                
                <!-- Hero Content -->
                <div class="home-content">
                    <div class="home-text">
                        
                        <h2 class="hs-line-14 font-alt mb-50 mb-xs-30">
                            <?php echo $title; ?>
                        </h2>
                        
                    </div>
                </div>
                <!-- End Hero Content -->
                
            </div>
        </section>
        <!-- End Slide Item -->
        
        <!-- Slide Item -->
        <section class="home-section bg-scroll bg-dark-alfa-30" data-background="img/bgImage19.JPG">
            <div class="js-height-full container">
                
                <!-- Hero Content -->
                <div class="home-content">
                    <div class="home-text">
                        <h2 class="hs-line-14 font-alt mt-50 mt-xs-30">
                            <?php echo $title; ?>
                        </h2>
                        
                    </div>
                </div>
                <!-- End Hero Content -->
                
            </div>
        </section>
        <!-- End Slide Item -->

    </div>
    <section class="page-section" id="about">
        <div class="container relative">
            
            <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
                About Studio
            </h2>
            
            <div class="section-text mb-50 mb-sm-20">
                <div class="row">
                
                    <div class="col-md-4">
                        <blockquote>
                            <p>
                            Design is&nbsp;not making beauty, beauty emerges from selection, affinities, integration, love.
                            </p>
                            <footer>
                                Louis Kahn
                            </footer>
                        </blockquote>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus. 
                    </div>
                    
                    <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                        Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet, iaculis libero. Donec vel ultricies purus. Nam dictum sem, eu aliquam.
                    </div>
                    
                </div>
            </div>
            
            <div class="row">
                
                <!-- Team item -->
                <div class="col-sm-4 mb-xs-30 wow fadeInUp">
                    <div class="team-item">
                        
                        <div class="team-item-image">
                            
                            <img src="images/team/team-1.jpg" alt="" />
                            
                            <div class="team-item-detail">
                                
                                <h4 class="font-alt normal">Hello & Welcome!</h4>
                                
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&nbsp;iaculis diam. 
                                </p>
                                
                                <div class="team-social-links">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="team-item-descr font-alt">
                            
                            <div class="team-item-name">
                                Thomas Rhythm 
                            </div>
                            
                            <div class="team-item-role">
                                Art Director
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <!-- End Team item -->
                
                <!-- Team item -->
                <div class="col-sm-4 mb-xs-30 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        
                        <div class="team-item-image">
                            
                            <img src="images/team/team-2.jpg" alt="" />
                            
                            <div class="team-item-detail">
                                
                                <h4 class="font-alt normal">Nice to meet!</h4>
                                
                                <p>
                                    Curabitur augue, nec finibus mauris pretium eu. Duis placerat ex gravida nibh tristique porta.
                                </p>
                                
                                <div class="team-social-links">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="team-item-descr font-alt">
                            
                            <div class="team-item-name">
                                Marta Laning
                            </div>
                            
                            <div class="team-item-role">
                                Web engineer
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <!-- End Team item -->
                
                <!-- Team item -->
                <div class="col-sm-4 mb-xs-30 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        
                        <div class="team-item-image">
                            
                            <img src="images/team/team-3.jpg" alt="" />
                            
                            <div class="team-item-detail">
                                
                                <h4 class="font-alt normal">Whats Up!</h4>
                                
                                <p>
                                    Adipiscing elit curabitur eu&nbsp;adipiscing lacus eu&nbsp;adipiscing lacus, a&nbsp;iaculis diam. 
                                </p>
                                
                                <div class="team-social-links">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="team-item-descr font-alt">
                            
                            <div class="team-item-name">
                                Steve ANDERS
                            </div>
                            
                            <div class="team-item-role">
                                Developer
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <!-- End Team item -->
                
            </div>
            
            
        </div>
    </section>

    <section class="page-section bg-dark bg-dark-alfa-90 fullwidth-slider" data-background="img/section-bg-3.jpg">
                
        <!-- Slide Item -->
        <div>
            <div class="container relative">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 align-center">
                        <!-- Section Icon -->
                        <div class="section-icon">
                            <span class="icon-quote"></span>
                        </div>
                        <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                        <blockquote class="testimonial white">
                            <p>
                                Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                risus utaliquam dapibus. Thanks!
                            </p>
                            <footer class="testimonial-author">
                                John Doe, doodle inc.
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slide Item -->
        
        <!-- Slide Item -->
        <div>
            <div class="container relative">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 align-center">
                        <!-- Section Icon -->
                        <div class="section-icon">
                            <span class="icon-quote"></span>
                        </div>
                        <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                        <blockquote class="testimonial white">
                            <p>
                                Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                risus utaliquam dapibus. Thanks!
                            </p>
                            <footer class="testimonial-author">
                                John Doe, doodle inc.
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slide Item -->
        
        <!-- Slide Item -->
        <div>
            <div class="container relative">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 align-center">
                        <!-- Section Icon -->
                        <div class="section-icon">
                            <span class="icon-quote"></span>
                        </div>
                        <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                        <blockquote class="testimonial white">
                            <p>
                                Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                risus utaliquam dapibus. Thanks!
                            </p>
                            <footer class="testimonial-author">
                                John Doe, doodle inc.
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slide Item -->
        
    </section>
@endsection

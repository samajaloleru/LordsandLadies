@extends('layouts.app')

@section('content')
    <!-- Head Section -->
    <section class="page-section bg-dark-alfa-70 parallax-3" data-background="img/bgImage5.JPG">
        <div class="relative container align-left">
            
            <div class="row">
                
                <div class="col-md-8 mt-30">
                    <h1 class="hs-line-11 font-alt mb-20 mb-xs-0"><?php echo $title; ?></h1>
                    <div class="hs-line-4 font-alt">
                        We’re always open to talk to good people
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- End Head Section -->
    
    
    <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class="container relative">
            
            <h2 class="section-title font-alt mb-70 mb-sm-40">
                Reach out to us Via this Medium
            </h2>
            
            <div class="row mb-60 mb-xs-40">
                
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        
                        <!-- Phone -->
                        <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="ci-title font-alt">
                                    Call Us
                                </div>
                                <div class="ci-text">
                                    +61 3 8376 6284
                                </div>
                            </div>
                        </div>
                        <!-- End Phone -->
                        
                        <!-- Address -->
                        <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="ci-title font-alt">
                                    Address
                                </div>
                                <div class="ci-text">
                                    245 Quigley Blvd, Ste K
                                </div>
                            </div>
                        </div>
                        <!-- End Address -->
                        
                        <!-- Email -->
                        <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="ci-title font-alt">
                                    Email
                                </div>
                                <div class="ci-text">
                                    <a href="mailto:support@bestlooker.pro">support@bestlooker.pro</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Email -->
                        
                    </div>
                </div>
                
            </div>
            
            <!-- Contact Form -->                            
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact-item">
                        <div class="ci-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="ci-title font-alt">
                            WhatsApp
                        </div>
                        <div class="ci-text">
                            <a href="mailto:support@bestlooker.pro">support@bestlooker.pro</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Form -->
            
        </div>
    </section>
    <!-- End Contact Section -->
    
    
    <!-- Google Map -->
    <div class="google-map">
        
        <a href="#" class="map-section">
            
            <div class="map-toggle">
                <div class="mt-icon">
                    <i class="fa fa-map-marker"></i>
                </div>
                <div class="mt-text font-alt">
                    <div class="mt-open">Open the map <i class="fa fa-angle-down"></i></div>
                    <div class="mt-close">Close the map <i class="fa fa-angle-up"></i></div>
                </div>
            </div>
            
        </a>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12286.715636833376!2d-75.59837531200412!3d39.65694025682884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c703f3d191cf13%3A0xf4674106f987fe3a!2s245+Quigley+Blvd+Ste+K%2C+New+Castle%2C+DE+19720%2C+USA!5e0!3m2!1sen!2sua!4v1530266633608" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        
    </div>
    <!-- End Google Map -->
@endsection

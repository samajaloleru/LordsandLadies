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
    
    
    <!-- Section -->
    <section class="page-section">
        <div class="container relative">
            
            <div class="row">
                
                
                <!-- Sidebar -->
                <div class="col-sm-4 col-md-3 sidebar">
                    
                    <!-- Search Widget -->
                    <div class="widget">
                        <form class="form-inline form" role="form">
                            <div class="search-wrap">
                                <button class="search-button animate" type="submit" title="Start Search">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" class="form-control search-field" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <!-- End Search Widget -->
                    
                    <!-- Widget -->
                    <div class="widget">
                        
                        <h5 class="widget-title font-alt">Categories</h5>
                        
                        <div class="widget-body">
                            <ul class="clearlist widget-menu">
                                <li>
                                    <a href="#" title="">Branding</a>
                                    <small>
                                        - 7
                                    </small>
                                </li>
                                <li>
                                    <a href="#" title="">Design</a>
                                    <small>
                                        - 15
                                    </small>
                                </li>
                                <li>
                                    <a href="#" title="">Development</a>
                                    <small>
                                        - 3
                                    </small>
                                </li>
                                <li>
                                    <a href="#" title="">Photography</a>
                                    <small>
                                        - 5
                                    </small>
                                </li>
                                <li>
                                    <a href="#" title="">Other</a>
                                    <small>
                                        - 1
                                    </small>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- End Widget -->
                    
                    <!-- Widget -->
                    <div class="widget">
                        
                        <h5 class="widget-title font-alt">Tags</h5>
                        
                        <div class="widget-body">
                            <div class="tags">
                                <a href="#">Design</a>
                                <a href="#">Portfolio</a>
                                <a href="#">Digital</a>
                                <a href="#">Branding</a>
                                <a href="#">Theme</a>
                                <a href="#">Clean</a>
                                <a href="#">UI & UX</a>
                                <a href="#">Love</a>
                            </div>
                        </div>
                        
                    </div>
                    <!-- End Widget -->
                    
                    <!-- Widget -->
                    <div class="widget">
                        
                        <h5 class="widget-title font-alt">Last posts</h5>
                        
                        <div class="widget-body">
                            <ul class="clearlist widget-posts">
                                <li class="clearfix">
                                    <a href="#"><img src="img/bgImage11.JPG" alt="" class="widget-posts-img blog-icon" /></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Minimalistic Design Forever</a>
                                        Posted by John Doe 7 Mar 
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href="#"><img src="img/bgImage11.JPG" alt="" class="widget-posts-img blog-icon" /></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Ipsum dolor sit amet, consectetur adipiscing elit</a>
                                        Posted by John Doe 7 Mar 
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href="#"><img src="img/bgImage12.JPG" alt="" class="widget-posts-img blog-icon" /></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">New Web Design Trends in 2015 year</a>
                                        Posted by John Doe 7 Mar 
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href="#"><img src="img/bgImage13.JPG" alt="" class="widget-posts-img blog-icon" /></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Hipster’s Style in Web Design and Logo</a>
                                        Posted by John Doe 7 Mar 
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href="#"><img src="img/bgImage14.JPG" alt="" class="widget-posts-img blog-icon" /></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Duis tristique condimentum nulla, bibendum consectetu</a>
                                        Posted by John Doe 7 Mar 
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- End Widget -->
                    
                    <!-- Widget -->
                    <div class="widget">
                        
                        <h5 class="widget-title font-alt">Comments</h5>
                        
                        <div class="widget-body">
                            <ul class="clearlist widget-comments">
                                <li>
                                    John Doe on <a href="#" title="">Lorem ipsum dolor sit amet</a>
                                </li>
                                <li>
                                    Emma Johnson on <a href="#" title="">Suspendisse accumsan interdum tellus</a>
                                </li>
                                <li>
                                    John Doe on <a href="#" title="">Praesent ultricies ut ipsum</a>
                                </li>
                                <li>
                                    Mark Deen on <a href="#" title="">Vivamus malesuada vel nulla vulputate</a>
                                </li>
                                <li>
                                    Sam Brin on <a href="#" title="">Aenean auctor egestas auctor</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- End Widget -->
                    
                    <!-- Widget -->
                    <div class="widget">
                        
                        <h5 class="widget-title font-alt">Text widget</h5>
                        
                        <div class="widget-body">
                            <div class="widget-text clearfix">
                                
                                <img src="img/user-avatar.png" alt="" width="70" class="img-circle left img-left">
                                
                                Consectetur adipiscing elit. Quisque magna ante eleifend eleifend. 
                                Purus ut dignissim consectetur, nulla erat ultrices purus, ut consequat sem elit non sem.
                                Quisque magna ante eleifend eleifend. 
                            
                            </div>
                        </div>
                        
                    </div>                            
                    <!-- End Widget -->
                    
                    <!-- Widget -->
                    <div class="widget">
                        
                        <h5 class="widget-title font-alt">Archive</h5>
                        
                        <div class="widget-body">
                            <ul class="clearlist widget-menu">
                                <li>
                                    <a href="#" title="">February 2014</a>
                                </li>
                                <li>
                                    <a href="#" title="">January 2014</a>
                                </li>
                                <li>
                                    <a href="#" title="">December 2013</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- End Widget -->
                    
                </div>
                <!-- End Sidebar -->
                
                <!-- Content -->
                <div class="col-sm-8 col-md-offset-1">
                    
                    <!-- Post -->
                    <div class="blog-item">
                        
                        <!-- Post Title -->
                        <h2 class="blog-item-title font-alt"><a href="blog-single-sidebar-right.html">Post with media gallery</a></h2>
                        
                        <!-- Author, Categories, Comments -->
                        <div class="blog-item-data">
                            <a href="#"><i class="fa fa-clock-o"></i> 5 December</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-user"></i> John Doe</a>
                            <span class="separator">&nbsp;</span>
                            <i class="fa fa-folder-open"></i>
                            <a href="#">Design</a>, <a href="#">Branding</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-comments"></i> 5 Comments</a>
                        </div>
                        
                        <!-- Media Gallery -->
                        <div class="blog-media">
                            <ul class="clearlist content-slider">
                                <li>
                                    <img src="img/bgImage3.JPG" alt="" />
                                </li>
                                <li>
                                    <img src="img/bgImage3  .JPG" alt="" />
                                </li>
                                <li>
                                    <img src="img/bgImage3.JPG" alt="" />
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Text Intro -->
                        <div class="blog-item-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris non laoreet dui. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa.
                            </p>
                        </div>
                        
                        <!-- Read More Link -->
                        <div class="blog-item-foot">
                            <a href="blog-single-sidebar-right.html" class="btn btn-mod btn-round  btn-small">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        
                    </div>
                    <!-- End Post -->
                    
                    <!-- Post -->
                    <div class="blog-item">
                        
                        <!-- Blockquote -->
                        <blockquote class="blog-item-q">
                            <p>
                                <a href="blog-single-sidebar-right.html">Curabitur iaculis, ligula facilisis volutpat suscipit, sapien felis tempor, consequat vitae velit.</a>
                            </p>
                        </blockquote>
                        <!-- End Blockquote -->
                        
                        <!-- Author, Categories, Comments -->
                        <div class="blog-item-data">
                            <a href="#"><i class="fa fa-clock-o"></i> 5 December</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-user"></i> John Doe</a>
                            <span class="separator">&nbsp;</span>
                            <i class="fa fa-folder-open"></i>
                            <a href="#">Design</a>, <a href="#">Branding</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-comments"></i> 5 Comments</a>
                        </div>
                        
                        <!-- Read More Link -->
                        <div class="blog-item-foot">
                            <a href="blog-single-sidebar-right.html" class="btn btn-mod btn-round  btn-small">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        
                    </div>
                    <!-- End Post -->
                    
                    <!-- Post -->
                    <div class="blog-item">
                        
                        <!-- Post Title -->
                        <h2 class="blog-item-title font-alt"><a href="blog-single-sidebar-right.html">Video post only</a></h2>
                        
                        <!-- Author, Categories, Comments -->
                        <div class="blog-item-data">
                            <a href="#"><i class="fa fa-clock-o"></i> 4 December</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-user"></i> John Doe</a>
                            <span class="separator">&nbsp;</span>
                            <i class="fa fa-folder-open"></i>
                            <a href="#">Design</a>, <a href="#">Branding</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-comments"></i> 5 Comments</a>
                        </div>
                        
                        <!-- Media Gallery -->
                        <div class="blog-media">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/w2JUhDd0CAA" frameborder="0" allowfullscreen></iframe>
                        </div>
                        
                        <!-- Text Intro -->
                        <div class="blog-item-body">
                            <p>
                                Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa.
                            </p>
                        </div>
                        
                        <!-- Read More Link -->
                        <div class="blog-item-foot">
                            <a href="blog-single-sidebar-right.html" class="btn btn-mod btn-round  btn-small">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        
                    </div>
                    <!-- End Post -->
                    
                    <!-- Post -->
                    <div class="blog-item">
                        
                        <!-- Post Title -->
                        <h2 class="blog-item-title font-alt"><a href="blog-single-sidebar-right.html">Post with text only</a></h2>
                        
                        <!-- Author, Categories, Comments -->
                        <div class="blog-item-data">
                            <a href="#"><i class="fa fa-clock-o"></i> 4 December</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-user"></i> John Doe</a>
                            <span class="separator">&nbsp;</span>
                            <i class="fa fa-folder-open"></i>
                            <a href="#">Design</a>, <a href="#">Branding</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-comments"></i> 5 Comments</a>
                        </div>
                        
                        <!-- Text Intro -->
                        <div class="blog-item-body">
                            <p>
                                Suspendisse accumsan interdum tellus, eu imperdiet lacus consectetur sed. Aliquam in ligula ac lacus blandit commodo vel luctus quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras eu ultrices mauris. 
                            </p>
                        </div>
                        
                        <!-- Read More Link -->
                        <div class="blog-item-foot">
                            <a href="blog-single-sidebar-right.html" class="btn btn-mod btn-round  btn-small">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        
                    </div>
                    <!-- End Post -->
                    
                    <!-- Post -->
                    <div class="blog-item">
                        
                        <!-- Post Title -->
                        <h2 class="blog-item-title font-alt"><a href="blog-single-sidebar-right.html">Image post only</a></h2>
                        
                        <!-- Author, Categories, Comments -->
                        <div class="blog-item-data">
                            <a href="#"><i class="fa fa-clock-o"></i> 3 December</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-user"></i> John Doe</a>
                            <span class="separator">&nbsp;</span>
                            <i class="fa fa-folder-open"></i>
                            <a href="#">Design</a>, <a href="#">Branding</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-comments"></i> 5 Comments</a>
                        </div>
                        
                        <!-- Image -->
                        <div class="blog-media">
                            <a href="blog-single-sidebar-right.html"><img src="img/bgImage3.JPG" alt="" /></a>
                        </div>
                        
                        <!-- Text Intro -->
                        <div class="blog-item-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend. Aliquam ac libero et diam rutrum rutrum. Nullam interdum mattis ipsum at convallis. 
                            </p>
                        </div>
                        
                        <!-- Read More Link -->
                        <div class="blog-item-foot">
                            <a href="blog-single-sidebar-right.html" class="btn btn-mod btn-round  btn-small">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        
                    </div>
                    <!-- End Post -->
                    
                    <!-- Pagination -->
                    <div class="pagination">
                        <a href="#"><i class="fa fa-angle-left"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a class="no-active">...</a>
                        <a href="#">9</a>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- End Pagination -->
                    
                </div>
                <!-- End Content -->
                
            </div>
            
        </div>
    </section>
    <!-- End Section -->
@endsection

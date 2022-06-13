@extends('layouts.frontbase')
@section('title','ANASAYFA')
@section('content')
        <!--? Slider Area Start-->
 @include('home.slider')
<!-- Slider Area End -->
<!--? About-2 Area Start -->
@include('home.about-area2')
<!-- About-2 Area End -->
@include('home.services')
@include('home.testimonial-area')
@include('home.videoArea')
<footer>
        <div class="footer-wrappr section-bg3" style="background-color: rgb(44, 44, 44)">
            <div class="footer-area footer-padding ">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo mb-25">
                                    <a href="index.html"><img src="{{asset('asset/home')}}/assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="header-area">
                                    <div class="main-header main-header2">
                                        <div class="menu-main d-flex align-items-center justify-content-start">
                                            <!-- Main-menu -->
                                            <div class="main-menu main-menu2">
                                                <nav> 
                                                    <ul>
                                                        <li><a href="index.html">Home</a></li>
                                                        <li><a href="about.html">About</a></li>
                                                        <li><a href="services.html">Services</a></li>
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social mt-50">
                                    <a href="/twitter"><i class="fab fa-twitter"></i><h1>{{ $settings->twitter }}</h1></a>
                                    <br/>
                                    <a href="/twitter"><i class="fab fa-facebook"></i><h1>{{ $settings->facebook }}</h1></a>
                                    <br/>
                                    <a href="/twitter"><i class="fab fa-instagram"></i><h1>{{ $settings->instagram }}</h1></a>
    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="single-footer-caption">
                                <div class="footer-tittle mb-50">
                                    <h4>Subscribe newsletter</h4>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                    Subscribe
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium misem ut ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-10 ">
                                <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </footer>
@endsection
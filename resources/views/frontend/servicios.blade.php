@extends('layouts.app')
@section('title', '')
@section('content')
<!--Page Cover-->
<section class="row page-cover2" style="background-image: url({{asset('assets/images/servicios.jpeg')}})">
    <div class="row m0">
        <div class="container">
            <h2 class="h1">We are Search Engine &amp; Social Media Experts</h2>
            <h4 class="sub-h4">Marketing Solutions That Work</h4>
            <p>We’re also experts at finding the sweet spot between Google’s guidelines and what is commercially right for you. We have progressive theories on search as a tool for retention of customers, not just for acquisition.</p>
        </div>
    </div>
</section>

<form action="#" class="row free-analysis-form style3" method="get">
    <div class="container">
        <h3 class="this-title">Request a Free Analysis</h3>
        <div class="row">
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon"><img src="{{asset('assets/images/icons/service/17.png')}}" alt=""></span>
                    <input type="text" class="form-control" placeholder="Full Name">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon"><img src="{{asset('assets/images/icons/service/18.png')}}" alt=""></span>
                    <input type="email" class="form-control" placeholder="Email Address">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon"><img src="{{asset('assets/images/icons/service/19.png')}}" alt=""></span>
                    <input type="tel" class="form-control" placeholder="Phone Number">
                </div>
            </div>
            <div class="col-md-10">
                <div class="input-group">
                    <span class="input-group-addon"><img src="{{asset('assets/images/icons/service/20.png')}}" alt=""></span>
                    <textarea class="form-control" placeholder="Message"></textarea>
                </div>
            </div>
            <div class="col-md-2 text-right">
                <input type="submit" value="Submit" class="btn btn-primary btn-sm">
            </div>
        </div>
    </div>
</form>

<section class="row service-about5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-6 img-holder">
                <img src="{{asset('assets/images/screens2.png')}}" alt="">
            </div>
            <div class="col-md-6 col-md-pull-6 text-holder">
                <div class="row sectionTitle text-left">
                    <h2 class="this-title">Featured Projects by Digital Agency</h2>
                    <p>We are Search Engine &amp; Social Media Experts</p>
                </div>
                <p class="this-p">We’re also experts at finding the sweet spot between Google’s guidelines and what is commercially right for you. We have progressive theories on search as a tool for retention of customers, not just for acquisition. </p>
                <ul class="this-features list-unstyled">
                    <li><span class="icon-holder"><img src="{{asset('assets/images/icons/service/26.png')}}" alt=""></span>Perfect Design</li>
                    <li><span class="icon-holder"><img src="{{asset('assets/images/icons/service/27.png')}}" alt=""></span>Fully Responsive</li>
                    <li><span class="icon-holder"><img src="{{asset('assets/images/icons/service/28.png')}}" alt=""></span>Fast Loading</li>
                    <li><span class="icon-holder"><img src="{{asset('assets/images/icons/service/29.png')}}" alt=""></span>Seo Friendly</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--Facts-->
<section class="fun-facts style2 row">
    <div class="col-sm-6 col-md-3 fun-fact style2">
        <div class="fact">
            <div class="icon"><img src="{{asset('assets/images/icons/service/30.png')}}" alt=""></div>
            <div class="counter">87</div>
            <div class="fact-about">Webdesign<br>Projects</div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 fun-fact style2">
        <div class="fact">
            <div class="icon"><img src="{{asset('assets/images/icons/service/31.png')}}" alt=""></div>
            <div class="counter">62</div>
            <div class="fact-about">Logo design <br>Projects</div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 fun-fact style2">
        <div class="fact">
            <div class="icon"><img src="{{asset('assets/images/icons/service/32.png')}}" alt=""></div>
            <div class="counter">36</div>
            <div class="fact-about">Application design<br>Projects</div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 fun-fact style2">
        <div class="fact">
            <div class="icon"><img src="{{asset('assets/images/icons/service/33.png')}}" alt=""></div>
            <div class="counter">25</div>
            <div class="fact-about">Print media<br>Projects</div>
        </div>
    </div>
</section>

<!--Testimonial-->
<section class="row testimonial2">
    <div class="container">
        <div class="row sectionTitle">
            <h2 class="this-title">Testimonial</h2>
            <p>Reviewed from our client</p>
        </div>
        <div class="row text-center quote-sign"><img src="{{asset('assets/images/quote2.png')}}" alt=""></div>
        <div class="testimonial2-carousel testimonial-slides">
            <div class="item">
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspe Super to ranatur aut odit aut fugit, sed quia consequuntur magni doores eos qui ratione voluptatem sequi nesciunt. They Neque porro quisquam est.</p>
                <footer class="testimonail-footer">
                    <div class="media pull-left">
                        <div class="media-left"><a href="#"><img src="{{asset('assets/images/testimonial2.jpg')}}" alt="" class="img-circle"></a></div>
                        <div class="media-body">
                            <h4 class="this-title">Johnathan Doe</h4>
                            <h4 class="this-pos">United States</h4>
                        </div>
                    </div>
                </footer>
            </div>
            <div class="item">
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspe Super to ranatur aut odit aut fugit, sed quia consequuntur magni doores eos qui ratione voluptatem sequi nesciunt. They Neque porro quisquam est.</p>
                <footer class="testimonail-footer">
                    <div class="media pull-left">
                        <div class="media-left"><a href="#"><img src="{{asset('assets/images/testimonial2.jpg')}}" alt="" class="img-circle"></a></div>
                        <div class="media-body">
                            <h4 class="this-title">Johnathan Doe</h4>
                            <h4 class="this-pos">United States</h4>
                        </div>
                    </div>
                </footer>
            </div>
            <div class="item">
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspe Super to ranatur aut odit aut fugit, sed quia consequuntur magni doores eos qui ratione voluptatem sequi nesciunt. They Neque porro quisquam est.</p>
                <footer class="testimonail-footer">
                    <div class="media pull-left">
                        <div class="media-left"><a href="#"><img src="{{asset('assets/images/testimonial2.jpg')}}" alt="" class="img-circle"></a></div>
                        <div class="media-body">
                            <h4 class="this-title">Johnathan Doe</h4>
                            <h4 class="this-pos">United States</h4>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</section>

<!--Similar Services-->
<section class="row similar-services">
    <div class="container">
        <div class="row sectionTitle white2">
            <h2 class="this-title">Similar type of Services</h2>
            <p>We are Search Engine &amp; Social Media Experts</p>
        </div>
        <div class="row">
            <div class="col-sm-4 similar-service">
                <div class="inner row">
                    <div class="icon-holder"><img src="{{asset('assets/images/icons/service/34.png')}}" alt=""></div>
                    <h3 class="this-title">Online Bussiness</h3>
                    <p class="this-about">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec metus vel ligula placerat pellentesque.</p>
                    <a href="single-service.html" class="btn">read more</a>
                </div>
            </div>
            <div class="col-sm-4 similar-service">
                <div class="inner row">
                    <div class="icon-holder"><img src="{{asset('assets/images/icons/service/34.png')}}" alt=""></div>
                    <h3 class="this-title">Accurate Analytics</h3>
                    <p class="this-about">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec metus vel ligula placerat pellentesque.</p>
                    <a href="single-service.html" class="btn">read more</a>
                </div>
            </div>
            <div class="col-sm-4 similar-service">
                <div class="inner row">
                    <div class="icon-holder"><img src="{{asset('assets/images/icons/service/34.png')}}" alt=""></div>
                    <h3 class="this-title">True Statastics</h3>
                    <p class="this-about">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec metus vel ligula placerat pellentesque.</p>
                    <a href="single-service.html" class="btn">read more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Related Case-->
<section class="row realated-cases2">
    <div class="container">
        <div class="row sectionTitle text-left">
            <h2 class="this-title">Related Case Studies</h2>
            <p>We are Search Engine &amp; Social Media Experts</p>
        </div>
        <div class="row">
            <div class="col-sm-4 related-case2">
                <div class="inner row">
                    <div class="icon-holder"><img src="{{asset('assets/images/icons/cases/1.png')}}" alt=""></div>
                    <a href="single-case.html"><h3 class="this-title">Project illum qui dolorem to eum fugiat over.</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipise Tacing elit. Pellentesque nec metus  vel ligula placerat pellentesque nisi elit.</p>
                </div>
            </div>
            <div class="col-sm-4 related-case2">
                <div class="inner row">
                    <div class="icon-holder"><img src="{{asset('assets/images/icons/cases/2.png')}}" alt=""></div>
                    <a href="single-case.html"><h3 class="this-title">Quos dolores et quas molestias. </h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipise Tacing elit. Pellentesque nec metus  vel ligula placerat pellentesque nisi elit.</p>
                </div>
            </div>
            <div class="col-sm-4 related-case2">
                <div class="inner row">
                    <div class="icon-holder"><img src="{{asset('assets/images/icons/cases/3.png')}}" alt=""></div>
                    <a href="single-case.html"><h3 class="this-title">Nam libero tempore, cum soluta nobis est.</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipise Tacing elit. Pellentesque nec metus  vel ligula placerat pellentesque nisi elit.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

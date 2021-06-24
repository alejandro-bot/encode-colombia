@extends('layouts.app')
@section('title', '')
@section('content')
<!--Page Cover-->
<section class="row page-cover" style="background-image:url({{asset('assets/images/colleagues-giving-fist-bump.jpeg')}}); width:100%;">
<div class="row m0">
    <div class="container">
        <h2 class="page-title">About Digital Agency</h2>
    </div>
</div>
</section>

<!--Brief About Us-->
<section class="row about-briefs">
<div class="container">
    <div class="row about-brief">
        <div class="col-sm-4 col-sm-push-8 img-block">
            <img src="{{asset('assets/images/expertise-circle.png')}}" alt="" class="img-responsive">
        </div>
        <div class="col-sm-8 col-sm-pull-4 text-block">
            <div class="row sectionTitle text-left">
                <h2 class="this-title">Marketing Solutions That Work</h2>
                <p>We are Search Engine &amp; Social Media Experts</p>
            </div>

            <p>We’re also experts at finding the sweet spot between Google’s guidelines and what is commercially right for you. We have progressive theories on search as a tool for retention of customers, not just for acquisition. And whatever we do, we always measure, always analyze and always innovate. </p>
            <br>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
            <br>
            <br class="hidden-lg">
            <br class="hidden-lg">
        </div>
    </div>
</div>
</section>

<!--Why Choose-->
<section class="row why-choose">
<div class="container">
    <div class="row sectionTitle white">
        <h2 class="this-title">Why Choose Digital Agency</h2>
        <p>We are Search Engine &amp; Social Media Experts</p>
    </div>

    <div class="row">
        <div class="col-sm-4 choose-cause">
            <div class="icon-holder row red"><img src="{{asset('assets/images/icons/about/1.png')}}" alt=""></div>
            <h3 class="this-title">Always on Support</h3>
            <p class="this-about">Nullam facilisis venenatis elit. Sed pellentesque semper consequat. Phasellus mi mi, euism od vel fringilla id, gravida sed.</p>
        </div>
        <div class="col-sm-4 choose-cause">
            <div class="icon-holder row green"><img src="{{asset('assets/images/icons/about/2.png')}}" alt=""></div>
            <h3 class="this-title">Custom SEO Solutions</h3>
            <p class="this-about">Nullam facilisis venenatis elit. Sed pellentesque semper consequat. Phasellus mi mi, euism od vel fringilla id, gravida sed.</p>
        </div>
        <div class="col-sm-4 choose-cause">
            <div class="icon-holder row blue"><img src="{{asset('assets/images/icons/about/3.png')}}" alt=""></div>
            <h3 class="this-title">Money Back Policy</h3>
            <p class="this-about">Nullam facilisis venenatis elit. Sed pellentesque semper consequat. Phasellus mi mi, euism od vel fringilla id, gravida sed.</p>
        </div>
    </div>

</div>
</section>

<!--Team Members-->
<section class="team-members row">
<div class="container">
    <div class="row sectionTitle">
        <h2 class="this-title">World’s Best at your Services</h2>
        <p>We are Search Engine &amp; Social Media Experts</p>
    </div>

    <div class="row team-members-here">
        <!--Member-->
        <div class="col-sm-4 col-md-3 team-member">
            <div class="inner row">
                <div class="img-holder row">
                    <img src="{{asset('assets/images/marketing1.jpeg')}}" style="height: 200px;" alt="">
                    <div class="hover-box">
                        <p>Nullam facilisis venenatising elit. Sed pellentesqueings semper consequat. Phase 1 llus mi mi, euism wisdomed od vel fringilla id, gravida</p>
                        <ul class="list-unstyled social-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                </div>
                <h4 class="this-title">Johnathan Doe</h4>
                <h5 class="this-position">Co-Founder</h5>
            </div>
        </div>
        <!--Member-->
        <div class="col-sm-4 col-md-3 team-member">
            <div class="inner row">
                <div class="img-holder row">
                    <img src="{{asset('assets/images/marketing2.jpeg')}}" style="height: 200px;" alt="">
                    <div class="hover-box">
                        <p>Nullam facilisis venenatising elit. Sed pellentesqueings semper consequat. Phase 1 llus mi mi, euism wisdomed od vel fringilla id, gravida</p>
                        <ul class="list-unstyled social-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                </div>
                <h4 class="this-title">Johnathan Doe</h4>
                <h5 class="this-position">Managing Director</h5>
            </div>
        </div>
        <!--Member-->
        <div class="col-sm-4 col-md-3 team-member">
            <div class="inner row">
                <div class="img-holder row">
                    <img src="{{asset('assets/images/marketing3.jpeg')}}" style="height: 200px;" alt="">
                    <div class="hover-box">
                        <p>Nullam facilisis venenatising elit. Sed pellentesqueings semper consequat. Phase 1 llus mi mi, euism wisdomed od vel fringilla id, gravida</p>
                        <ul class="list-unstyled social-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                </div>
                <h4 class="this-title">Johnathan Doe</h4>
                <h5 class="this-position">SEO Specialist</h5>
            </div>
        </div>
        <!--Member-->
        <div class="col-sm-4 col-md-3 team-member">
            <div class="inner row">
                <div class="img-holder row">
                    <img src="{{asset('assets/images/marketing4.jpeg')}}" style="height: 200px;" alt="">
                    <div class="hover-box">
                        <p>Nullam facilisis venenatising elit. Sed pellentesqueings semper consequat. Phase 1 llus mi mi, euism wisdomed od vel fringilla id, gravida</p>
                        <ul class="list-unstyled social-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                </div>
                <h4 class="this-title">Johnathan Doe</h4>
                <h5 class="this-position">Business Analyst</h5>
            </div>
        </div>
        <!--Member-->
        <div class="col-sm-4 col-md-3 team-member">
            <div class="inner row">
                <div class="img-holder row">
                    <img src="{{asset('assets/images/desarrollo1.jpeg')}}" style="height: 200px;" alt="">
                    <div class="hover-box">
                        <p>Nullam facilisis venenatising elit. Sed pellentesqueings semper consequat. Phase 1 llus mi mi, euism wisdomed od vel fringilla id, gravida</p>
                        <ul class="list-unstyled social-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                </div>
                <h4 class="this-title">Angelina Doe</h4>
                <h5 class="this-position">Co-Founder</h5>
            </div>
        </div>
        <!--Member-->
        <div class="col-sm-4 col-md-3 team-member">
            <div class="inner row">
                <div class="img-holder row">
                    <img src="{{asset('assets/images/desarrollo2.jpeg')}}" style="height: 200px;" alt="">
                    <div class="hover-box">
                        <p>Nullam facilisis venenatising elit. Sed pellentesqueings semper consequat. Phase 1 llus mi mi, euism wisdomed od vel fringilla id, gravida</p>
                        <ul class="list-unstyled social-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                </div>
                <h4 class="this-title">Johnathan Doe</h4>
                <h5 class="this-position">Managing Director</h5>
            </div>
        </div>
        <!--Member-->
        <div class="col-sm-4 col-md-3 team-member">
            <div class="inner row">
                <div class="img-holder row">
                    <img src="{{asset('assets/images/desarrollo3.jpeg')}}" style="height: 200px;" alt="">
                    <div class="hover-box">
                        <p>Nullam facilisis venenatising elit. Sed pellentesqueings semper consequat. Phase 1 llus mi mi, euism wisdomed od vel fringilla id, gravida</p>
                        <ul class="list-unstyled social-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                </div>
                <h4 class="this-title">Angelina Doe</h4>
                <h5 class="this-position">SEO Specialist</h5>
            </div>
        </div>
        <!--Member-->
        <div class="col-sm-4 col-md-3 team-member">
            <div class="inner row">
                <div class="img-holder row">
                    <img src="{{asset('assets/images/desarrollo4.jpeg')}}" style="height: 200px;" alt="">
                    <div class="hover-box">
                        <p>Nullam facilisis venenatising elit. Sed pellentesqueings semper consequat. Phase 1 llus mi mi, euism wisdomed od vel fringilla id, gravida</p>
                        <ul class="list-unstyled social-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                </div>
                <h4 class="this-title">Johnathan Doe</h4>
                <h5 class="this-position">Business Analyst</h5>
            </div>
        </div>
    </div>

</div>
</section>

<!--About Blocks-->
<section class="row about-blocks">
<div class="container">
    <div class="row">
        <div class="col-sm-4 about-block">
            <div class="icon-holder"><img src="{{asset('assets/images/icons/about/4.png')}}" alt=""></div>
            <h3 class="this-title">Excellent Support</h3>
            <p class="this-about">We’re also experts at finding the sweet spot between Google’s guidelines and what is commercially right for you. We have progressive theories on search as a tool for retention.</p>
        </div>
        <div class="col-sm-4 about-block">
            <div class="icon-holder"><img src="{{asset('assets/images/icons/about/5.png')}}" alt=""></div>
            <h3 class="this-title">Awesome Team</h3>
            <p class="this-about">We’re also experts at finding the sweet spot between Google’s guidelines and what is commercially right for you. We have progressive theories on search as a tool for retention.</p>
        </div>
        <div class="col-sm-4 about-block">
            <div class="icon-holder"><img src="{{asset('assets/images/icons/about/6.png')}}" alt=""></div>
            <h3 class="this-title">Faster Performance</h3>
            <p class="this-about">We’re also experts at finding the sweet spot between Google’s guidelines and what is commercially right for you. We have progressive theories on search as a tool for retention.</p>
        </div>
    </div>
</div>
</section>
@endsection

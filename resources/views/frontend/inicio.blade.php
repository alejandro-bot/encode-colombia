@extends('layouts.app')
@section('title', 'inicio')
@section('content')
    <!--Slider Area-->
  	<section class="row main-slider-area">
  		<div id="slider1" class="rev_slider" data-version="5.0">
  			<ul>
  				<li data-transition="scaledownfromleft" data-title="Slide 1">
  					<img src="{{asset('assets/images/slider-1.jpeg')}}"
						 alt=""
						 data-bgposition="center center"
						 data-bgfit="cover"
						 data-bgrepeat="no-repeat"
						 class="rev-slidebg" data-no-retina>

					<div class="tp-caption welcome-Title tp-resizeme"
						data-x="left"
						data-hoffset="0"
						data-y="top"
						data-voffset="['0','0','0','0,'0','20']"
						data-fontsize="['42','36','32','30','30','24']"
						data-lineheight="['50','42','38','36','36','30']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
						data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
						data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
						data-start="1000"
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on">
					</div>

					<div class="tp-caption welcome-Content tp-resizeme"
						data-x="left"
						data-hoffset="0"
						data-y="top"
						data-voffset="['155','125','120','125','125']"
						data-fontsize="16"
						data-lineheight="['30','24','24','24','24','24']"
						data-width="['458','458','458','400','400','290']"
						data-height="none"
						data-whitespace="normal"
						data-transform_idle="o:1;"
						data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
						data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
						data-start="1500"
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on">
					</div>
  				</li>

  				<li data-transition="scaledownfromleft" data-title="Slide 2">
  					<img src="{{asset('assets/images/flujograma.jpeg')}}"
						 alt=""
						 data-bgposition="center center"
						 data-bgfit="cover"
						 data-bgrepeat="no-repeat"
						 class="rev-slidebg" data-no-retina>

					<div class="tp-caption welcome-Title color-fff tp-resizeme"
						data-x="left"
						data-hoffset="0"
						data-y="top"
						data-voffset="['0','0','0','0,'0','20']"
						data-fontsize="['42','36','32','30','30','24']"
						data-lineheight="['50','42','38','36','36','30']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
						data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
						data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
						data-start="1000"
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on">
					</div>

					<div class="tp-caption welcome-Content color-fff tp-resizeme"
						data-x="left"
						data-hoffset="0"
						data-y="top"
						data-voffset="['155','125','120','125','125']"
						data-fontsize="16"
						data-lineheight="['30','24','24','24','24','24']"
						data-width="['458','458','458','400','400','290']"
						data-height="none"
						data-whitespace="normal"
						data-transform_idle="o:1;"
						data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
						data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
						data-start="1500"
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on">
					</div>
  				</li>
  			</ul>
  		</div>
  	</section>

  	<!--Feature Services Blocks-->
  	<section class="row featured-service-blocks">
  		<div class="container">
  			<div class="col-md-4 featured-service-block">
  				<div class="icon-holder"><img src="{{asset('assets/images/icons/service/11.png')}}" alt=""></div>
  				<h3 class="this-title"><a href="single-service.html">Helping you to increase your site traffic</a></h3>
  				<p class="this-summary">Nullam lacinia dolor eu magna aliquet placerat. Aliquam semper</p>
  				<a href="single-service2.html" class="this-expand"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></a>
  			</div>
  			<div class="col-md-4 featured-service-block">
  				<div class="icon-holder"><img src="{{asset('assets/images/icons/service/12.png')}}" alt=""></div>
  				<h3 class="this-title"><a href="single-service5.html">Fruitfull Results in provided Timeline guaranteed</a></h3>
  				<p class="this-summary">Nullam lacinia dolor eu magna aliquet placerat. Aliquam semper</p>
  				<a href="single-service3.html" class="this-expand"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></a>
  			</div>
  			<div class="col-md-4 featured-service-block">
  				<div class="icon-holder"><img src="{{asset('assets/images/icons/service/13.png')}}" alt=""></div>
  				<h3 class="this-title"><a href="single-service.html">On Page &amp; Off Page SEO in Competitive Price</a></h3>
  				<p class="this-summary">Nullam lacinia dolor eu magna aliquet placerat. Aliquam semper</p>
  				<a href="single-service4.html" class="this-expand"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></a>
  			</div>
  		</div>
  	</section>

  	<!--Expertise Section-->
  	<section class="row our-experties">
  		<div class="container">
  			<div class="row sectionTitle">
  				<h2 class="this-title">Marketing Solutions That Work</h2>
  				<p>We are Search Engine &amp; Social Media Experts</p>
  			</div>

  			<div class="row expertise-intro text-center">We’re also experts at finding the sweet spot between Google’s guidelines and what is commercially right for you. We have progressive theories on search as a tool for retention of customers</div>

  			<div class="expertise-circle row text-center">
  				<div class="block pos-left top-block">We have the experience for your project</div>
  				<div class="block pos-left bottom-block">We know how to save you time and money</div>
  				<img src="{{asset('assets/images/marketing-digital.jpg')}}" style="width: 70%;" alt="" class="img-circle">
  				<div class="block pos-right top-block">We will bring you new pre-qualified customers</div>
  				<div class="block pos-right bottom-block">We have the experience for your project</div>
  			</div>
  		</div>
  	</section>

  	<!--Service Block-->
  	<section class="row our-services">
  		<div class="container">
  			<div class="row sectionTitle">
  				<h2 class="this-title">Our Services Keeps you Happy</h2>
  				<p>We are Search Engine &amp; Social Media Experts</p>
  			</div>

  			<div class="service-blocks row">
  				<div class="col-sm-4 service-block">
  					<div class="row inner">
						<div class="icon-holder row" data-icon="1"><img src="{{asset('assets/images/icons/service/1.png')}}" alt=""></div>
						<h3 class="this-title">Online Bussiness</h3>
						<p class="this-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec metus vel ligula placerat pellentesque.</p>
						<a href="single-service.html" class="more">Read More</a>
					</div>
  				</div>
  				<div class="col-sm-4 service-block">
  					<div class="row inner">
						<div class="icon-holder row" data-icon="2"><img src="{{asset('assets/images/icons/service/2.png')}}" alt=""></div>
						<h3 class="this-title">Accurate Analytics</h3>
						<p class="this-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec metus vel ligula placerat pellentesque.</p>
						<a href="single-service.html" class="more">Read More</a>
					</div>
  				</div>
  				<div class="col-sm-4 service-block">
  					<div class="row inner">
  						<div class="icon-holder row" data-icon="3"><img src="{{asset('assets/images/icons/service/3.png')}}" alt=""></div>
						<h3 class="this-title">True Statastics</h3>
						<p class="this-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec metus vel ligula placerat pellentesque.</p>
						<a href="single-service.html" class="more">Read More</a>
  					</div>
  				</div>
  			</div>

  		</div>
  	</section>

  	<!--Service Block-->
  	<section class="row more-services">
  		<div class="container">
  			<div class="row sectionTitle">
  				<h2 class="this-title">We also Offer below Services</h2>
  				<p>We are Search Engine &amp; Social Media Experts</p>
  			</div>

  			<div class="row more-service-blocks">
  				<div class="col-sm-4 service-block2">
  					<div class="row icon-holder"><img src="{{asset('assets/images/icons/service/4.png')}}" alt=""></div>
  					<h4 class="this-title">Social Media Optimization</h4>
					<p class="this-summary">Lorem ipsum dolor sit amet, consecteturing the adipiscing elit. Pellentesque nec metuses vel ligula placerat pellentesque.</p>
  				</div>
  				<div class="col-sm-4 service-block2">
  					<div class="row icon-holder"><img src="{{asset('assets/images/icons/service/5.png')}}" alt=""></div>
  					<h4 class="this-title">App Development</h4>
					<p class="this-summary">Lorem ipsum dolor sit amet, consecteturing the adipiscing elit. Pellentesque nec metuses vel ligula placerat pellentesque.</p>
  				</div>
  				<div class="col-sm-4 service-block2">
  					<div class="row icon-holder"><img src="{{asset('assets/images/icons/service/6.png')}}" alt=""></div>
  					<h4 class="this-title">Digital Marketing</h4>
					<p class="this-summary">Lorem ipsum dolor sit amet, consecteturing the adipiscing elit. Pellentesque nec metuses vel ligula placerat pellentesque.</p>
  				</div>
  				<div class="col-sm-4 service-block2">
  					<div class="row icon-holder"><img src="{{asset('assets/images/icons/service/7.png')}}" alt=""></div>
  					<h4 class="this-title">Email Marketing</h4>
					<p class="this-summary">Lorem ipsum dolor sit amet, consecteturing the adipiscing elit. Pellentesque nec metuses vel ligula placerat pellentesque.</p>
  				</div>
  				<div class="col-sm-4 service-block2">
  					<div class="row icon-holder"><img src="{{asset('assets/images/icons/service/8.png')}}" alt=""></div>
  					<h4 class="this-title">On Page / Off Page SEO</h4>
					<p class="this-summary">Lorem ipsum dolor sit amet, consecteturing the adipiscing elit. Pellentesque nec metuses vel ligula placerat pellentesque.</p>
  				</div>
  				<div class="col-sm-4 service-block2">
  					<div class="row icon-holder"><img src="{{asset('assets/images/icons/service/9.png')}}" alt=""></div>
  					<h4 class="this-title">Pixel Perfect Web Design</h4>
					<p class="this-summary">Lorem ipsum dolor sit amet, consecteturing the adipiscing elit. Pellentesque nec metuses vel ligula placerat pellentesque.</p>
  				</div>
  				<div class="row text-center m0">
  					<a href="service.html" class="btn btn-primary">learn more</a>
  				</div>
  			</div>
  		</div>
  	</section>

  	<!--Testimonial-->
  	<section class="row testimonials">
  		<div class="container">
  			<div class="row quote-sign text-center"><img src="{{asset('assets/images/quote-sign.png')}}" alt=""></div>
  			<div class="row">
  				<div class="testimonial-slides">
  					<div class="item">
  						<div class="row client-img"><img src="{{asset('assets/images/testimonial.jpg')}}" alt=""></div>
  						<div class="row quotes">“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo ."</div>
  						<h4 class="client-id">Johnathan, <span>Theme Designer</span></h4>
  					</div>
  					<div class="item">
  						<div class="row client-img"><img src="{{asset('assets/images/testimonial.jpg')}}" alt=""></div>
  						<div class="row quotes">“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo ."</div>
  						<h4 class="client-id">Johnathan, <span>Theme Designer</span></h4>
  					</div>
  					<div class="item">
  						<div class="row client-img"><img src="{{asset('assets/images/testimonial.jpg')}}" alt=""></div>
  						<div class="row quotes">“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo ."</div>
  						<h4 class="client-id">Johnathan, <span>Theme Designer</span></h4>
  					</div>
  					<div class="item">
  						<div class="row client-img"><img src="{{asset('assets/images/testimonial.jpg')}}" alt=""></div>
  						<div class="row quotes">“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo ."</div>
  						<h4 class="client-id">Johnathan, <span>Theme Designer</span></h4>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

  	<!--Project Case Studies-->
  	<section class="row project-studies">
  		<div class="container">
  			<div class="row sectionTitle white">
  				<h2 class="this-title">Case Studies of Our Projects</h2>
  				<p>We provide our 100% to make a good website</p>
  			</div>
  			<div class="row project-studies-box">
  				<div class="studies-blocks row">
					<div class="blocks-box">
						<!--Block-->
						<div class="study-block">
							<div class="block-inner row">
								<div class="row rotate-back">
									<div class="bg-img row"><a href="single-case.html"><img src="{{asset('assets/images/logo-solnaciente.png')}}" style="width: 60%; margin-top: 120px;" alt="" class="shot"></a></div>
									<div class="row study-about">
										<div class="row client-logo"><a href="single-case.html"><img src="{{asset('assets/images/encode-logo.png')}}" alt=""></a></div>
									</div>
								</div>
							</div>
						</div>
						<!--Block-->
						<div class="study-block">
							<div class="block-inner row">
								<div class="row rotate-back">
									<div class="bg-img row"><a href="single-case.html"><img src="{{asset('assets/images/humanez-logo.png')}}" style="width: 50%; margin-top: 150px;" alt="" class="shot"></a></div>
								</div>
							</div>
						</div>
						<!--Block-->
						<div class="study-block">
							<div class="block-inner row">
								<div class="row rotate-back">
									<div class="bg-img row"><a href="single-case.html"><img src="{{asset('assets/images/LOGO-ALPHA---3.gif')}}" style="width: 100%; margin-top: 2px;" alt="" class="shot"></a></div>
								</div>
							</div>
						</div>
						<!--Block-->
						<div class="study-block">
							<div class="block-inner row">
								<div class="row rotate-back">
									<div class="bg-img row"><a href="single-case.html"><img src="{{asset('assets/images/logo-samakardas.png')}}" alt="" class="shot"></a></div>
									<div class="row study-about">
										<a href="single-case.html"><h4 class="this-case">Digital Agency</h4></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
  			</div>
  		</div>
  	</section>

  	<!--Served Clients-->
  	<section class="served-clients row">
  		<div class="container">
  			<div class="row sectionTitle">
  				<h2 class="this-title">We also Offer below Services</h2>
  				<p>We provide our 100% to make a good website</p>
  			</div>
  			<div class="row">
  				<div class="col-xs-4 col-sm-2 served-client"><a href="#"><img src="{{asset('asset/images/clients/3.png')}}" alt=""></a></div>
  				<div class="col-xs-4 col-sm-2 served-client"><a href="#"><img src="{{asset('asset/images/clients/3.png')}}" alt=""></a></div>
  				<div class="col-xs-4 col-sm-2 served-client"><a href="#"><img src="{{asset('asset/images/clients/3.png')}}" alt=""></a></div>
  				<div class="col-xs-4 col-sm-2 served-client"><a href="#"><img src="{{asset('asset/images/clients/3.png')}}" alt=""></a></div>
  				<div class="col-xs-4 col-sm-2 served-client"><a href="#"><img src="{{asset('asset/images/clients/3.png')}}" alt=""></a></div>
  				<div class="col-xs-4 col-sm-2 served-client"><a href="#"><img src="{{asset('asset/images/clients/3.png')}}" alt=""></a></div>
  			</div>
  		</div>
  	</section>
@endsection

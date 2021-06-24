@extends('layouts.app')
@section('title', '')
@section('content')
<!--Page Cover-->
<section class="row page-cover" style="background-image: url({{asset('assets/images/contacto.png')}})">
    <div class="row m0">
        <div class="container">
            <h2 class="page-title">Contacto</h2>
        </div>
    </div>
</section>

<!--Contact Form Area-->
<section class="row contact-form-area">
    <div class="container">
        <div class="row sectionTitle text-left">
            <h2 class="this-title">We are here to Help You</h2>
            <p>Marketing Solutions That Work</p>
        </div>
        <p class="contact-text">We’re also experts at finding the sweet spot between Google’s guidelines and what is commercially right for you. We have progressive theories on search as a tool for retention of customers, not just for acquisition. And whatever we do, we always measure, always analyze and always innovate.</p>
        <div class="row contact-form-box">
            <form action="contact_process.php" id="contactForm" class="row contact-form">
                <div class="col-sm-6 form-group"><input type="text" id="name" name="name" placeholder="Full Name" required class="form-control"></div>
                <div class="col-sm-6 form-group"><input type="email" id="email" name="email" placeholder="Email Address" required class="form-control"></div>
                <div class="col-sm-6 form-group"><input type="text" id="subject" name="subject" placeholder="Subject" required class="form-control"></div>
                <div class="col-sm-6 form-group"><input type="tel" id="phone" name="phone" placeholder="Phone Number" class="form-control"></div>
                <div class="col-sm-12 form-group"><textarea name="message" id="message" class="form-control" placeholder="Message"></textarea></div>
                <div class="col-sm-12"><input type="submit" value="submit now" class="btn btn-primary"></div>
            </form>
            <div id="success">Your message succesfully sent!</div>
            <div id="error">Opps! There is something wrong. Please try again</div>
        </div>
    </div>
</section>

<!--Contact Infos-->
<section class="row contact-infos">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 contact-info">
                <div class="media">
                    <div class="media-left"><i class="fa fa-map-marker"></i></div>
                    <div class="media-body">
                        <h3 class="this-title">Excellent Support</h3>
                        <ul class="list-unstyled">
                            <li>24  North  Park Avenue,</li>
                            <li>CA 23104 San Francisco USA</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 contact-info">
                <div class="media">
                    <div class="media-left"><i class="fa fa-life-ring"></i></div>
                    <div class="media-body">
                        <h3 class="this-title">Excellent Support</h3>
                        <ul class="list-unstyled">
                            <li>0 (877) 123-4567</li>
                            <li><a href="mailto:support@yoursite.com">support@yoursite.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 contact-info">
                <div class="media">
                    <div class="media-left"><i class="fa fa-phone"></i></div>
                    <div class="media-body">
                        <h3 class="this-title">Excellent Support</h3>
                        <ul class="list-unstyled">
                            <li>0 (877) 123-4567</li>
                            <li><a href="mailto:support@yoursite.com">support@yoursite.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 contact-info">
                <div class="media">
                    <div class="media-left"><i class="fa fa-weixin"></i></div>
                    <div class="media-body">
                        <h3 class="this-title">live chat</h3>
                        <ul class="list-unstyled">
                            <li>0 (877) 123-4567</li>
                            <li><a href="#" class="email">Click here to Start Chat</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Map-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31813.54910135553!2d-74.12532498698747!3d4.648625931726433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses-419!2sco!4v1623714391348!5m2!1ses-419!2sco" width="2000" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
@endsection

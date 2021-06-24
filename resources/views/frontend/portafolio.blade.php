@extends('layouts.app')
@section('title', '')
@section('content')
<!--Page Cover-->
<section class="row page-cover" data-bgimage="{{asset('assets/images/img-caso-exito.png')}}">
    <div class="row m0">
        <div class="container">
            <h2 class="page-title">case studies</h2>
        </div>
    </div>
</section>

<section class="row case-studies">
    <div class="container">

        <ul class="gallery-filter list-unstyled">
            <li data-filter class="active">all</li>
            <li data-filter=".desigital">desigital</li>
            <li data-filter=".material">material</li>
            <li data-filter=".technology">technology</li>
            <li data-filter=".seo">seo</li>
        </ul>

        <div class="row">
            <div class="filterable-gallery case-gallery row-style">
                <!--Item-->
                <div class="gallery-item case-item desigital col-md-4 col-sm-6">
                    <div class="inner row">
                        <div class="img-holder row"><img src="{{asset('assets/images/humanez.png')}}" alt=""></div>
                        <div class="content-box">
                            <h5 class="this-title">Digital Agency</h5>
                            <p class="this-summary">Cras a ultricies dui. In congue risus quis accumsan porttitor. Proin accumsan, urna et sagittis aliquet.</p>
                            <a href="single-case.html" class="more">read more</a>
                        </div>
                        <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                    </div>
                </div>
                <!--Item-->
                <div class="gallery-item case-item material col-md-4 col-sm-6">
                    <div class="inner row">
                        <div class="img-holder row"><img src="{{asset('assets/images/elsolnaciente.png')}}" alt=""></div>
                        <div class="content-box">
                            <h5 class="this-title">Digital Agency</h5>
                            <p class="this-summary">Cras a ultricies dui. In congue risus quis accumsan porttitor. Proin accumsan, urna et sagittis aliquet.</p>
                            <a href="single-case.html" class="more">read more</a>
                        </div>
                        <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                    </div>
                </div>
                <!--Item-->
                <div class="gallery-item case-item technology col-md-4 col-sm-6">
                    <div class="inner row">
                        <div class="img-holder row"><img src="{{asset('assets/images/ecommerce.png')}}" alt=""></div>
                        <div class="content-box">
                            <h5 class="this-title">Digital Agency</h5>
                            <p class="this-summary">Cras a ultricies dui. In congue risus quis accumsan porttitor. Proin accumsan, urna et sagittis aliquet.</p>
                            <a href="single-case.html" class="more">read more</a>
                        </div>
                        <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                    </div>
                </div>
                <!--Item-->
                <div class="gallery-item case-item seo col-md-4 col-sm-6">
                    <div class="inner row">
                        <div class="img-holder row"><img src="{{asset('assets/images/elnumismatico.png')}}" alt=""></div>
                        <div class="content-box">
                            <h5 class="this-title">Digital Agency</h5>
                            <p class="this-summary">Cras a ultricies dui. In congue risus quis accumsan porttitor. Proin accumsan, urna et sagittis aliquet.</p>
                            <a href="single-case.html" class="more">read more</a>
                        </div>
                        <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                    </div>
                </div>
                <!--Item-->
                <div class="gallery-item case-item seo col-md-4 col-sm-6">
                    <div class="inner row">
                        <div class="img-holder row"><img src="{{asset('assets/images/admin.png')}}" alt=""></div>
                        <div class="content-box">
                            <h5 class="this-title">Digital Agency</h5>
                            <p class="this-summary">Cras a ultricies dui. In congue risus quis accumsan porttitor. Proin accumsan, urna et sagittis aliquet.</p>
                            <a href="single-case.html" class="more">read more</a>
                        </div>
                        <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                    </div>
                </div>
                <!--Item-->
                <div class="gallery-item case-item technology col-md-4 col-sm-6">
                    <div class="inner row">
                        <div class="img-holder row"><img src="{{asset('assets/images/voyager.png')}}" alt=""></div>
                        <div class="content-box">
                            <h5 class="this-title">Digital Agency</h5>
                            <p class="this-summary">Cras a ultricies dui. In congue risus quis accumsan porttitor. Proin accumsan, urna et sagittis aliquet.</p>
                            <a href="single-case.html" class="more">read more</a>
                        </div>
                        <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                    </div>
                </div>
                <!--Item-->
                <div class="gallery-item case-item material col-md-4 col-sm-6">
                    <div class="inner row">
                        <div class="img-holder row"><img src="{{asset('assets/images/funwin.png')}}" alt=""></div>
                        <div class="content-box">
                            <h5 class="this-title">Digital Agency</h5>
                            <p class="this-summary">Cras a ultricies dui. In congue risus quis accumsan porttitor. Proin accumsan, urna et sagittis aliquet.</p>
                            <a href="single-case.html" class="more">read more</a>
                        </div>
                        <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                    </div>
                </div>
                <!--Item-->
                <div class="gallery-item case-item desigital col-md-4 col-sm-6">
                    <div class="inner row">
                        <div class="img-holder row"><img src="{{asset('assets/images/llaves.png')}}" alt=""></div>
                        <div class="content-box">
                            <h5 class="this-title">Digital Agency</h5>
                            <p class="this-summary">Cras a ultricies dui. In congue risus quis accumsan porttitor. Proin accumsan, urna et sagittis aliquet.</p>
                            <a href="single-case.html" class="more">read more</a>
                        </div>
                        <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                    </div>
                </div>
                <!--Item-->
                <div class="gallery-item case-item desigital col-md-4 col-sm-6">
                    <div class="inner row">
                        <div class="img-holder row"><img src="{{asset('assets/images/utam.png')}}" alt=""></div>
                        <div class="content-box">
                            <h5 class="this-title">Digital Agency</h5>
                            <p class="this-summary">Cras a ultricies dui. In congue risus quis accumsan porttitor. Proin accumsan, urna et sagittis aliquet.</p>
                            <a href="single-case.html" class="more">read more</a>
                        </div>
                        <div class="hover-trigger"><img src="{{asset('assets/images/icons/service/10.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

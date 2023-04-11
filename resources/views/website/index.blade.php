@extends('layouts.mainBody')
@section('title','Tax Analyzer')
@section('content')
<section>
        <div class="banner_part">
            <img src="{{asset('contents/website')}}/images/banner.jpg" alt="">
            <div class="bg_overlay">

            </div>
            <div class="content">
                <h2><span class="heading_1" style="color: red ;">Tax</span> <span style="color:green">Analyzer</span>

                    <br>
                    <span class="typer" id="some-id" data-words="Bangladesh,A Digital Software,Make your Return, Now Tax Return Making is Easy" data-delay="100" data-colors="red,red,red">
  </span>
                </h2>

            </div>
        </div>
    </section>





    <section class="bg-light">
        <div class="container pt-5 bg-light">


            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <i class="fa fa-leaf" aria-hidden="true"></i>
                        <h2>How Tax Analyzer Works</h2>
                        <span>It's works on 3 step</span>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <!--  Single Service Content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_service_content wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <!-- Icon -->

                        <div class="service_text">
                            <img src="{{asset('contents/website')}}/images/access.png" class="img-fluid" alt="">

                            <h5>Create a Account</h5>
                            <p>Lorem ipsum dolor sit amet, ctetur adipiscing elit. Donec neque ante, egestas in nunc vitae, euismod. </p>
                        </div>
                    </div>
                </div>
                <!--  Single Service Content -->

                <!--  Single Service Content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_service_content wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <!-- Icon -->

                        <div class="service_text">
                            <img src="{{asset('contents/website')}}/images/submit.png" class="img-fluid" alt="">

                            <h5>Submit Your Information</h5>
                            <p>Lorem ipsum dolor sit amet, ctetur adipiscing elit. Donec neque ante, egestas in nunc vitae, euismod. </p>
                        </div>
                    </div>
                </div>
                <!--  Single Service Content -->

                <!--  Single Service Content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_service_content wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <!-- Icon -->

                        <div class="service_text">
                            <img src="{{asset('contents/website')}}/images/file.png" class="img-fluid" alt="">

                            <h5>Download Your Return</h5>
                            <p>Lorem ipsum dolor sit amet, ctetur adipiscing elit. Donec neque ante, egestas in nunc vitae, euismod. </p>
                        </div>
                    </div>
                </div>
                <!--  Single Service Content -->


            </div>
        </div>
    </section>


    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <section class="section why-choose-us py-5 bg-light ">
        <div class="shapes-container">
            <div class="pattern pattern-dots"></div>
        </div>

        <div class="container pb-8 bring-to-front">
            <div class="section-heading text-center">
                <h2 class="heading-line">Why you should choose Tax Analyzer?</h2>
                <p class="text-muted lead mx-auto">Laapp is designed to provide you with the last trends in web design. It'll help you to focus on your product, launch your website faster and reach more customer.</p>
            </div>

            <div class="row gap-y">
                <div class="col-md-6 text-center">


                    <ul class="list-unstyled why-icon-list">
                        <li class="list-item">
                            <div class="media align-items-center">
                                <div class="icon-shape mr-3">
                                    <div class="shape shape-pipes"></div>
                                    <i class="icon text-alternate fas fa-plug fa-3x"></i>
                                </div>

                                <div class="media-body">
                                    <h5 class="bold">Easy to Use</h5>
                                </div>
                            </div>
                        </li>
                        <li class="list-item py-5">
                            <div class="media align-items-center">
                                <div class="icon-shape mr-3">
                                    <div class="shape shape-pipes"></div>
                                    <i class="icon text-alternate fas fa-robot fa-3x"></i>
                                </div>

                                <div class="media-body">
                                    <h5 class="bold">Automated System</h5>
                                </div>
                            </div>
                        </li>
                        <li class="list-item">
                            <div class="media align-items-center">
                                <div class="icon-shape mr-3">
                                    <div class="shape shape-pipes"></div>
                                    <i class="icon text-alternate fas fa-download fa-3x"></i>
                                </div>

                                <div class="media-body">
                                    <h5 class="bold">Easy to Download</h5>

                                </div>
                            </div>
                        </li>
                    </ul>


                </div>

                <div class="col-md-6">
                    <img src="{{asset('contents/website')}}/images/top.png" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>
@endsection

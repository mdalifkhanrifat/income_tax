@extends('layouts.mainBody')
@section('title','About')
@section('content')
<section class="bg-light py-2">
        <div class="container px-4 px-lg-5 bg-light">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid" src="{{asset('contents/website')}}/images/top.png" alt=""></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Tax Analyzer</h1>
                    <p>Income Tax is now one of the most important issues because governments collect this money and use it for all financial aspects. But currently, income tax submission is really tough and problematic because tax return form creation process
                        being manual, tax calculation is not easy work besides the lawyer charge a huge amount for this task. </p>
                    <a class="btn btn-primary" href="#!">Register Now</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body">
                    <p class="text-white m-0">INCOME TAX ANALYZER: FIND THE ASSESSMENT VALUE WITHOUT KNOWING ANY TAX KNOWLEDGE OR LAW</p>
                </div>
            </div>
            <!-- Content Row-->

        </div>
    </section>

    <div class="bg-light">
        <!-- For demo purpose -->
        <div class="container py-1">
            <div class="row text-center text-dark">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4">Our Team</h1>

                </div>
            </div>
        </div>
        <!-- End -->


        <div class="container">
            <div class="row text-center">

                <!-- Team item -->
                <div class="col-md-4 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{asset('contents/website')}}/images/team_1.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Md Ataullah Bhuiyan</h5><span class="small text-uppercase text-muted">Supervisor</span>

                    </div>
                </div>
                <!-- End -->

                <!-- Team item -->
                <div class="col-md-4 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{asset('contents/website')}}/images/team_3.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Alif Khan Rifat</h5><span class="small text-uppercase text-muted">Team Member</span>
                    </div>
                </div>
                <!-- End -->

                <!-- Team item -->
                <div class="col-md-4 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{asset('contents/website')}}/images/team_2.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Sujon Kumar Dey</h5><span class="small text-uppercase text-muted">Team Member</span>

                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
    </div>
@endsection

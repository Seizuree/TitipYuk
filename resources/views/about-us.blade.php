@extends('template.generic')

@section('title', 'About us')

@section('content')
    <section class="about-us section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="content-left wow fadeInLeft" data-wow-delay=".3s">
                        <img src="assets/images/about/choose-left.jpg" alt="#">
                        <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                            class="glightbox video"><i class="lni lni-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">

                    <div class="content-right wow fadeInRight" data-wow-delay=".5s">

                        <span class="sub-heading">About</span>
                        <h2>
                            About Our Company</h2>
                        <p>TitipYuk connects consignors and consignees in the food industry to promote local food businesses
                            and provide a space where they can consign.</p>
                        <h3>What We Do</h3>
                        <p>We provide a user-friendly platform for consignors to sell homemade food products on consignment,
                            and for consignees to connect with local food businesses. By supporting the growth of the local
                            food economy, we hope to create a stronger, more sustainable food system for everyone.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

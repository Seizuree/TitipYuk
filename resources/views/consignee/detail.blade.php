@extends('template.generic')

@section('title', 'Retail Detail')

@section('content')
    <section class="item-details section">
        <div class="container">
            <div class="top-area">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-images">
                            <main id="gallery">
                                <div class="main-img">
                                    <img src="{{ asset('assets/images/item-details/image1.jpg') }}" id="current"
                                        alt="#">
                                </div>
                                <div class="images">
                                    <img src="{{ asset('assets/images/item-details/image1.jpg') }}" class="img"
                                        alt="#">
                                    <img src="{{ asset('assets/images/item-details/image2.jpg') }}" class="img"
                                        alt="#">
                                    <img src="{{ asset('assets/images/item-details/image3.jpg') }}" class="img"
                                        alt="#">
                                    <img src="{{ asset('assets/images/item-details/image4.jpg') }}" class="img"
                                        alt="#">
                                    <img src="{{ asset('assets/images/item-details/image5.jpg') }}" class="img"
                                        alt="#">
                                </div>
                            </main>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-info">
                            <h2 class="title">Serenity Café</h2>
                            <p class="location"><i class="lni lni-map-marker"></i><a href="javascript:void(0)">New York,
                                    USA</a></p>
                            <div class="list-info">
                                <h4>Informations</h4>
                                <ul>
                                    <li><span>Address:</span> Kavling Street, RT/RW 008/008, Tangerang, Indonesia</li>
                                    <li><span>Hours:</span> Monday to Friday, 7am to 7pm; Saturday and Sunday, 8am to 6pm
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <a href="/consignee/1/consign" class="call">
                                            <i class="lni lni-bolt"></i>
                                            Consign
                                            <span>Consign this retail</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/account/messages" class="mail">
                                            <i class="lni lni-envelope"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="social-share">
                                <h4>Share</h4>
                                <ul>
                                    <li><a href="javascript:void(0)" class="facebook"><i
                                                class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)" class="twitter"><i
                                                class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)" class="google"><i class="lni lni-google"></i></a></li>
                                    <li><a href="javascript:void(0)" class="linkedin"><i
                                                class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="javascript:void(0)" class="pinterest"><i class="lni lni-pinterest"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-details-blocks">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-12">

                        <div class="single-block description">
                            <h3>Description</h3>
                            <p>
                                The heart of downtown Portland, Oregon, USA
                                Description: Serenity Café is a cozy and inviting café that provides a peaceful and relaxing
                                atmosphere for customers to enjoy their coffee and snacks. The café is decorated with
                                calming colors and natural elements, such as plants and wood accents. Customers can sit in
                                plush armchairs or on comfy sofas, or choose to work at one of the café's communal tables.
                                Serenity Café serves a variety of coffee drinks made from locally-roasted beans, as well as
                                tea, smoothies, and light bites such as pastries and sandwiches. The café also hosts regular
                                live music events and poetry readings.
                            </p>
                            <ul>
                                <li>Garlic Bread</li>
                                <li>Pizza</li>
                                <li>Thai Tea</li>
                                <li>Coffee</li>
                                <li>Noodle</li>
                            </ul>
                        </div>


                        <div class="single-block tags">
                            <h3>Tags</h3>
                            <ul>
                                <li><a href="javascript:void(0)">Bike</a></li>
                                <li><a href="javascript:void(0)">Services</a></li>
                                <li><a href="javascript:void(0)">Brand</a></li>
                                <li><a href="javascript:void(0)">Popular</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="item-details-sidebar">

                            <div class="single-block author">
                                <h3>Consignee</h3>
                                <div class="content">
                                    <img src="{{ asset('assets/images/testimonial/testi3.jpg') }}" alt="#">
                                    <h4>Miliya Jessy</h4>
                                    <span>Marketing of Serenity Café</span>
                                </div>
                            </div>

                            <div class="single-block ">
                                <h3>Location</h3>
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas"
                                            src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                            href="https://putlocker-is.org"></a><br>
                                        <style>
                                            .mapouter {
                                                position: relative;
                                                text-align: right;
                                                height: 300px;
                                                width: 100%;
                                            }
                                        </style><a href="https://www.embedgooglemap.net">google map code for website</a>
                                        <style>
                                            .gmap_canvas {
                                                overflow: hidden;
                                                background: none !important;
                                                height: 300px;
                                                width: 100%;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom-js')
    <script type="text/javascript">
        const current = document.getElementById("current");
        const opacity = 0.6;
        const imgs = document.querySelectorAll(".img");
        imgs.forEach(img => {
            img.addEventListener("click", (e) => {
                //reset opacity
                imgs.forEach(img => {
                    img.style.opacity = 1;
                });
                current.src = e.target.src;
                //adding class 
                //current.classList.add("fade-in");
                //opacity
                e.target.style.opacity = opacity;
            });
        });
    </script>
@endsection

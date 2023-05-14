@extends('template.generic')

@section('title', 'Contact')

@section('content')
    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head wow fadeInUp" data-wow-delay=".4s">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="single-head">
                            <div class="contant-inner-title">
                                <h2>Our Contacts & Location</h2>
                                <p>Business consulting excepteur sint occaecat cupidatat consulting non proident.</p>
                            </div>
                            <div class="single-info">
                                <h3>Opening hours</h3>
                                <ul>
                                    <li>Daily: 9.30 AM–6.00 PM</li>
                                    <li>Sunday & Holidays: Closed</li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <h3>Contact info</h3>
                                <ul>
                                    <li>77408 Satterfield Motorway Suite</li>
                                    <li>469 New Antonetta, BC K3L6P6</li>
                                    <li><a href="/cdn-cgi/l/email-protection#a3cacdc5cce3daccd6d1d4c6c1d0cad7c68dc0ccce"><span
                                                class="__cf_email__"
                                                data-cfemail="b7d2cfd6dac7dbd2f7ded9d1d899d4d8da">[email&#160;protected]</span></a>
                                    </li>
                                    <li><a href="tel:(617) 495-9400-326">(617) 495-9400-326</a></li>
                                </ul>
                            </div>
                            <div class="single-info contact-social">
                                <h3>Social contact</h3>
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="form-main">
                            <div class="form-title">
                                <h2>Get in Touch</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form.</p>
                            </div>
                            <form class="form" method="post" action="assets/mail/mail.php">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="name" type="text" placeholder="Your Name"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="subject" type="text" placeholder="Your Subject"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="email" type="email" placeholder="Your Email"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="phone" type="text" placeholder="Your Phone"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <textarea name="message" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="submit" class="btn ">Submit Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="map-section">
        <div class="map-container">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://123movies-to.com">123movies old site</a>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 100%;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 500px;
                            width: 100%;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>

@endsection

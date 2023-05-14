@extends('template.generic')

@section('title', 'Consign')

@section('content')
    <section class="dashboard section">
        <div class="item-details">
            <div class="container">
                <div class="top-area">
                    <h1>Restaurant Name</h1>
                    <p>1234 Address St, City, State, Zip Code</p>

                    <form class="my-items mt-4" method="GET" action="/dashboard/request">

                        <div class="item-list-title">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-5 col-12">
                                    <p>Product</p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>Consignor</p>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12">
                                    <p>Qty</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12">
                                    <p>Price</p>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12 align-right">
                                    <p>Action</p>
                                </div>
                            </div>
                        </div>


                        <div class="single-item-list">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-5 col-12">
                                    <div class="item-image">
                                        <img src="{{ asset('assets/images/my-items/my-item1.jpg') }}" alt="#">
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:void(0)">Brand New Iphone 11 Pro Max</a>
                                            </h3>
                                            <span class="price">Rp800</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>brian</p>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12">
                                    <p>5</p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>Rp15000 </p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12 align-right">
                                    <ul class="action-btn">
                                        <li><a href="javascript:void(0)"><i class="lni lni-plus"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="lni lni-minus"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="lni lni-reply"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="single-item-list">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-5 col-12">
                                    <div class="item-image">
                                        <img src="{{ asset('assets/images/my-items/my-item2.jpg') }}" alt="#">
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:void(0)">New Ferrari F80 Car</a></h3>
                                            <span class="price">Rp13000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>Adit</p>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12">
                                    <p>5</p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>Rp15000 </p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12 align-right">
                                    <ul class="action-btn">
                                        <li><a href="javascript:void(0)"><i class="lni lni-plus"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="lni lni-minus"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="lni lni-reply"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="single-item-list">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-5 col-12">
                                    <div class="item-image">
                                        <img src="{{ asset('assets/images/my-items/my-item3.jpg') }}" alt="#">
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:void(0)">Rick Morton- Magicius Chase</a>
                                            </h3>
                                            <span class="price">Rp500</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>Effel</p>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12">
                                    <p>5</p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>Rp15000 </p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12 align-right">
                                    <ul class="action-btn">
                                        <li><a href="javascript:void(0)"><i class="lni lni-plus"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="lni lni-minus"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="lni lni-reply"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="single-item-list">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-5 col-12">
                                    <div class="item-image">
                                        <img src="{{ asset('assets/images/my-items/my-item4.jpg') }}" alt="#">
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:void(0)">HP Laptop 6560b core i7</a>
                                            </h3>
                                            <span class="price">Rp750</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>Amel</p>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12">
                                    <p>5</p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>Rp15000 </p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12 align-right">
                                    <ul class="action-btn">
                                        <li><a href="javascript:void(0)"><i class="lni lni-plus"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="lni lni-minus"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="lni lni-reply"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection

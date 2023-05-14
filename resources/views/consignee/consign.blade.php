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
                                    <p>Category</p>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12">
                                    <p>Qty</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12">
                                    <p>Price</p>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12 align-right">
                                    <p>Select</p>
                                </div>
                            </div>
                        </div>


                        <div class="single-item-list">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-5 col-12">
                                    <div class="item-image">
                                        <img src="{{ asset('assets/images/my-items/my-item1.jpg') }}" alt="#">
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:void(0)">Donad</a>
                                            </h3>
                                            <span class="price">Rp800</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>Sweet</p>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12">
                                    <p>5</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" aria-label="price" id="price"
                                            value="15000" name="price">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12 align-right">
                                    <input type="checkbox" class="form-check-input width-auto" id="cbSelect"
                                        name="cbSelect">
                                </div>
                            </div>
                        </div>


                        <div class="single-item-list">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-5 col-12">
                                    <div class="item-image">
                                        <img src="{{ asset('assets/images/my-items/my-item2.jpg') }}" alt="#">
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:void(0)">Indomie Geprek</a></h3>
                                            <span class="price">Rp13000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>Snack</p>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12">
                                    <p>5</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" aria-label="price" id="price"
                                            value="15000" name="price">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12 align-right">
                                    <input type="checkbox" class="form-check-input width-auto" id="cbSelect"
                                        name="cbSelect">
                                </div>
                            </div>
                        </div>


                        <div class="single-item-list">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-5 col-12">
                                    <div class="item-image">
                                        <img src="{{ asset('assets/images/my-items/my-item3.jpg') }}" alt="#">
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:void(0)">Kentang</a>
                                            </h3>
                                            <span class="price">Rp500</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>Snack</p>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12">
                                    <p>5</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" aria-label="price" id="price"
                                            value="15000" name="price">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12 align-right">
                                    <input type="checkbox" class="form-check-input width-auto" id="cbSelect"
                                        name="cbSelect">
                                </div>
                            </div>
                        </div>


                        <div class="single-item-list">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-5 col-12">
                                    <div class="item-image">
                                        <img src="{{ asset('assets/images/my-items/my-item4.jpg') }}" alt="#">
                                        <div class="content">
                                            <h3 class="title"><a href="javascript:void(0)">Kue</a>
                                            </h3>
                                            <span class="price">Rp750</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>Dessert</p>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12">
                                    <p>5</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" aria-label="price" id="price"
                                            value="15000" name="price">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12 align-right">
                                    <input type="checkbox" class="form-check-input width-auto" id="cbSelect"
                                        name="cbSelect">
                                </div>
                            </div>
                        </div>


                        <div class="button align-right">
                            <button type="submit" class="btn">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection

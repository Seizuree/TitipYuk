@extends('template.sidebar')

@section('title', 'Consign Request')

@section('sidebar-content')
    <div class="dashboard-block mt-0">
        <h3 class="block-title">Consign Request</h3>
        <nav class="list-nav">
            <ul>
                <li class="active"><a href="javascript:void(0)">All Requests <span>42</span></a></li>
                <li><a href="javascript:void(0)">Accepted <span>88</span></a></li>
                <li><a href="javascript:void(0)">Rejected <span>12</span></a></li>
            </ul>
        </nav>

        <div class="my-items">

            <div class="item-list-title">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5 col-12">
                        <p>Place</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Consignor</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Total Products</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 align-right">
                        <p>Action</p>
                    </div>
                </div>
            </div>


            <div class="single-item-list">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="item-image">
                            <img src="{{ asset('assets/images/my-items/my-item1.png') }}" alt="#">
                            <div class="content">
                                <h3 class="title"><a href="javascript:void(0)">Brand New Iphone 11 Pro Max</a></h3>
                                <span class="price">$800</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Cafe</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>2</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 align-right">
                        <ul class="action-btn">
                            <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal1"><i
                                        class="lni lni-eye"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-checkmark"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-ban"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Place Name</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="my-items mt-4">

                                    <div class="item-list-title">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-md-5 col-12">
                                                <p>Product</p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-12">
                                                <p>Category</p>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-12">
                                                <p>Qty</p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-12 align-right">
                                                <p>Price</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="single-item-list">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-md-5 col-12">
                                                <div class="item-image">
                                                    <img src="{{ asset('assets/images/my-items/my-item1.png') }}"
                                                        alt="#">
                                                    <div class="content">
                                                        <h3 class="title"><a href="javascript:void(0)">Brand New Iphone 11
                                                                Pro Max</a>
                                                        </h3>
                                                        <span class="price">Rp800</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-12">
                                                <p>Appetizer</p>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-12">
                                                <p>5</p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-12 align-right">
                                                <p>Rp15000</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="single-item-list">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-md-5 col-12">
                                                <div class="item-image">
                                                    <img src="{{ asset('assets/images/my-items/my-item2.png') }}"
                                                        alt="#">
                                                    <div class="content">
                                                        <h3 class="title"><a href="javascript:void(0)">New Ferrari F80
                                                                Car</a></h3>
                                                        <span class="price">Rp13000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-12">
                                                <p>Snack</p>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-12">
                                                <p>5</p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-12 align-right">
                                                <p>Rp15000</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="single-item-list">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-md-5 col-12">
                                                <div class="item-image">
                                                    <img src="{{ asset('assets/images/my-items/my-item3.png') }}"
                                                        alt="#">
                                                    <div class="content">
                                                        <h3 class="title"><a href="javascript:void(0)">Rick Morton-
                                                                Magicius Chase</a>
                                                        </h3>
                                                        <span class="price">Rp500</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-12">
                                                <p>Dessert</p>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-12">
                                                <p>5</p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-12 align-right">
                                                <p>Rp15000</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="single-item-list">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-md-5 col-12">
                                                <div class="item-image">
                                                    <img src="{{ asset('assets/images/my-items/my-item4.png') }}"
                                                        alt="#">
                                                    <div class="content">
                                                        <h3 class="title"><a href="javascript:void(0)">HP Laptop 6560b
                                                                core i7</a></h3>
                                                        <span class="price">Rp750</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-12">
                                                <p>Dessert</p>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-12">
                                                <p>5</p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-12 align-right">
                                                <p>Rp15000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="single-item-list">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="item-image">
                            <img src="{{ asset('assets/images/my-items/my-item2.png') }}" alt="#">
                            <div class="content">
                                <h3 class="title"><a href="javascript:void(0)">New Ferrari F80 Car</a></h3>
                                <span class="price">$13000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Restaurant</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>1</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 align-right">
                        <ul class="action-btn">
                            <li><a href="javascript:void(0)"><i class="lni lni-eye"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-checkmark"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-ban"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="single-item-list">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="item-image">
                            <img src="{{ asset('assets/images/my-items/my-item3.png') }}" alt="#">
                            <div class="content">
                                <h3 class="title"><a href="javascript:void(0)">Rick Morton- Magicius Chase</a></h3>
                                <span class="price">$500</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Minimarket</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>3</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 align-right">
                        <ul class="action-btn">
                            <li><a href="javascript:void(0)"><i class="lni lni-eye"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-checkmark"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-ban"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="single-item-list">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="item-image">
                            <img src="{{ asset('assets/images/my-items/my-item4.png') }}" alt="#">
                            <div class="content">
                                <h3 class="title"><a href="javascript:void(0)">HP Laptop 6560b core i7</a></h3>
                                <span class="price">$750</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Coffee Shop</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>-</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 align-right">
                        <ul class="action-btn">
                            <li><a href="javascript:void(0)"><i class="lni lni-eye"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-checkmark"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-ban"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="pagination left">
                <ul class="pagination-list">
                    <li><a href="javascript:void(0)">1</a></li>
                    <li class="active"><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">3</a></li>
                    <li><a href="javascript:void(0)">4</a></li>
                    <li><a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a></li>
                </ul>
            </div>

        </div>

    </div>
@endsection

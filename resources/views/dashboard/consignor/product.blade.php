@extends('template.sidebar')

@section('title', 'Product List')

@section('sidebar-content')
    <div class="dashboard-block mt-0">
        <h3 class="block-title">My Products</h3>
        <nav class="list-nav">
            <ul>
                <li class="active"><a href="javascript:void(0)">All Products <span>42</span></a></li>
                <li><a href="javascript:void(0)">Active <span>88</span></a></li>
                <li><a href="javascript:void(0)">Deactive <span>12</span></a></li>
            </ul>
        </nav>

        <div class="my-items">

            <div class="item-list-title">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5 col-12">
                        <p>Product</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Category</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Consignee</p>
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
                            <img src="{{ asset('assets/images/my-items/my-item1.jpg') }}" alt="#">
                            <div class="content">
                                <h3 class="title"><a href="javascript:void(0)">Donad</a></h3>
                                <span class="price">Rp800</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Sweet</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>2</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 align-right">
                        <ul class="action-btn">
                            <li><a href="/dashboard/place/1/detail"><i class="lni lni-eye"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-pencil"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-trash"></i></a></li>
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
                                <h3 class="title"><a href="javascript:void(0)">Indomie Geprek</a></h3>
                                <span class="price">Rp13000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Snack</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>1</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 align-right">
                        <ul class="action-btn">
                            <li><a href="/dashboard/place/1/detail"><i class="lni lni-eye"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-pencil"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-trash"></i></a></li>
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
                                <h3 class="title"><a href="javascript:void(0)">Kentang</a></h3>
                                <span class="price">Rp500</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Snack</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>3</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 align-right">
                        <ul class="action-btn">
                            <li><a href="/dashboard/place/1/detail"><i class="lni lni-eye"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-pencil"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-trash"></i></a></li>
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
                                <h3 class="title"><a href="javascript:void(0)">Kue</a></h3>
                                <span class="price">Rp750</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Dessert</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>-</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 align-right">
                        <ul class="action-btn">
                            <li><a href="/dashboard/place/1/detail"><i class="lni lni-eye"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-pencil"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-trash"></i></a></li>
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

@extends('template.generic')

@section('title', 'Consignee List')

@section('content')
    <section class="category-page section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="category-sidebar">

                        <div class="single-widget search">
                            <h3>Search Consignee</h3>
                            <form action="#">
                                <input type="text" placeholder="Search Here...">
                                <button type="submit"><i class="lni lni-search-alt"></i></button>
                            </form>
                        </div>


                        <div class="single-widget">
                            <h3>All Categories</h3>
                            <ul class="list">
                                <li>
                                    <a href="javascript:void(0)"><i class="lni lni-dinner"></i>
                                        Restaurant<span>15</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="lni lni-home"></i> Grocery
                                        Store<span>35</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="lni lni-bolt"></i> Minimarket
                                        <span>60</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="lni lni-coffee-cup"></i> Coffee Shop
                                        <span>55</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="lni lni-burger"></i> Cafe
                                        <span>45</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="lni lni-question-circle"></i> Others
                                        <span>45</span></a>
                                </li>
                            </ul>
                        </div>


                        <div class="single-widget range">
                            <h3>Location Range</h3>
                            <input type="range" class="form-range" name="range" step="1" min="0"
                                max="60" value="10" onchange="rangePrimary.value=value">
                            <div class="range-inner">
                                <input type="text" id="rangePrimary" placeholder="100" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="category-grid-list">
                        <div class="row">
                            <div class="col-12">
                                <div class="category-grid-topbar">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <h3 class="title">Showing 1-12 of 21 ads found</h3>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-grid" type="button" role="tab"
                                                        aria-controls="nav-grid" aria-selected="true"><i
                                                            class="lni lni-grid-alt"></i></button>
                                                    <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-list" type="button" role="tab"
                                                        aria-controls="nav-list" aria-selected="false"><i
                                                            class="lni lni-list"></i></button>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-grid" role="tabpanel"
                                        aria-labelledby="nav-grid-tab">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-12">

                                                <div class="single-item-grid">
                                                    <div class="image">
                                                        <a href="/consignee/1"><img
                                                                src="{{ asset('assets/images/items-tab/item-1.jpg') }}"
                                                                alt="#"></a>

                                                        <span class="flat-badge sale">New</span>
                                                    </div>
                                                    <div class="content">
                                                        <a href="javascript:void(0)" class="tag">Restaurant</a>
                                                        <h3 class="title">
                                                            <a href="/consignee/1">Restoran Minang</a>
                                                        </h3>
                                                        <p class="location"><a href="javascript:void(0)"><i
                                                                    class="lni lni-map-marker">
                                                                </i>Alam Sutera, Tangerang</a></p>
                                                        <ul class="info">
                                                            <li class="price">1 km</li>
                                                            <li class="like"><a href="/account/messages"><i
                                                                        class="lni lni-envelope"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">

                                                <div class="single-item-grid">
                                                    <div class="image">
                                                        <a href="/consignee/1"><img
                                                                src="{{ asset('assets/images/items-tab/item-2.jpg') }}"
                                                                alt="#"></a>

                                                    </div>
                                                    <div class="content">
                                                        <a href="javascript:void(0)" class="tag">Others</a>
                                                        <h3 class="title">
                                                            <a href="/consignee/1">Restopedia</a>
                                                        </h3>
                                                        <p class="location"><a href="javascript:void(0)"><i
                                                                    class="lni lni-map-marker">
                                                                </i>Karawaci, Tangerang</a></p>
                                                        <ul class="info">
                                                            <li class="price">12 km</li>
                                                            <li class="like"><a href="/account/messages"><i
                                                                        class="lni lni-envelope"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">

                                                <div class="single-item-grid">
                                                    <div class="image">
                                                        <a href="/consignee/1"><img
                                                                src="{{ asset('assets/images/items-tab/item-3.jpg') }}"
                                                                alt="#"></a>

                                                        <span class="flat-badge sale">New</span>
                                                    </div>
                                                    <div class="content">
                                                        <a href="javascript:void(0)" class="tag">Cafe</a>
                                                        <h3 class="title">
                                                            <a href="/consignee/1">Rasela Cafe</a>
                                                        </h3>
                                                        <p class="location"><a href="javascript:void(0)"><i
                                                                    class="lni lni-map-marker">
                                                                </i>Alaska, USA</a></p>
                                                        <ul class="info">
                                                            <li class="price">10 km</li>
                                                            <li class="like"><a href="/account/messages"><i
                                                                        class="lni lni-envelope"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">

                                                <div class="single-item-grid">
                                                    <div class="image">
                                                        <a href="/consignee/1"><img
                                                                src="{{ asset('assets/images/items-tab/item-4.jpg') }}"
                                                                alt="#"></a>

                                                    </div>
                                                    <div class="content">
                                                        <a href="javascript:void(0)" class="tag">Coffee Shop</a>
                                                        <h3 class="title">
                                                            <a href="/consignee/1">Rocky Rooster</a>
                                                        </h3>
                                                        <p class="location"><a href="javascript:void(0)"><i
                                                                    class="lni lni-map-marker">
                                                                </i>Las Vegas</a></p>
                                                        <ul class="info">
                                                            <li class="price">6 km</li>
                                                            <li class="like"><a href="/account/messages"><i
                                                                        class="lni lni-envelope"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">

                                                <div class="single-item-grid">
                                                    <div class="image">
                                                        <a href="/consignee/1"><img
                                                                src="{{ asset('assets/images/items-tab/item-5.jpg') }}"
                                                                alt="#"></a>

                                                        <span class="flat-badge sale">New</span>
                                                    </div>
                                                    <div class="content">
                                                        <a href="javascript:void(0)" class="tag">Coffee Shop</a>
                                                        <h3 class="title">
                                                            <a href="/consignee/1">FArbucks</a>
                                                        </h3>
                                                        <p class="location"><a href="javascript:void(0)"><i
                                                                    class="lni lni-map-marker">
                                                                </i>Alaska, USA</a></p>
                                                        <ul class="info">
                                                            <li class="price">4 km</li>
                                                            <li class="like"><a href="/account/messages"><i
                                                                        class="lni lni-envelope"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">

                                                <div class="single-item-grid">
                                                    <div class="image">
                                                        <a href="/consignee/1"><img
                                                                src="{{ asset('assets/images/items-tab/item-6.jpg') }}"
                                                                alt="#"></a>

                                                        <span class="flat-badge rent">Recommended</span>
                                                    </div>
                                                    <div class="content">
                                                        <a href="javascript:void(0)" class="tag">Others</a>
                                                        <h3 class="title">
                                                            <a href="/consignee/1">Warung Hidayat</a>
                                                        </h3>
                                                        <p class="location"><a href="javascript:void(0)"><i
                                                                    class="lni lni-map-marker">
                                                                </i>New York, USA</a></p>
                                                        <ul class="info">
                                                            <li class="price">32 km</li>
                                                            <li class="like"><a href="/account/messages"><i
                                                                        class="lni lni-envelope"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">

                                                <div class="single-item-grid">
                                                    <div class="image">
                                                        <a href="/consignee/1"><img
                                                                src="{{ asset('assets/images/items-tab/item-7.jpg') }}"
                                                                alt="#"></a>

                                                    </div>
                                                    <div class="content">
                                                        <a href="javascript:void(0)" class="tag">Cafe</a>
                                                        <h3 class="title">
                                                            <a href="/consignee/1">Cafein</a>
                                                        </h3>
                                                        <p class="location"><a href="javascript:void(0)"><i
                                                                    class="lni lni-map-marker">
                                                                </i>Delhi, India</a></p>
                                                        <ul class="info">
                                                            <li class="price">12 km</li>
                                                            <li class="like"><a href="/account/messages"><i
                                                                        class="lni lni-envelope"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">

                                                <div class="single-item-grid">
                                                    <div class="image">
                                                        <a href="/consignee/1"><img
                                                                src="{{ asset('assets/images/items-tab/item-1.jpg') }}"
                                                                alt="#"></a>

                                                        <span class="flat-badge sale">New</span>
                                                    </div>
                                                    <div class="content">
                                                        <a href="javascript:void(0)" class="tag">Restaurant</a>
                                                        <h3 class="title">
                                                            <a href="/consignee/1">Restoran Minang</a>
                                                        </h3>
                                                        <p class="location"><a href="javascript:void(0)"><i
                                                                    class="lni lni-map-marker">
                                                                </i>Alam Sutera, Tangerang</a></p>
                                                        <ul class="info">
                                                            <li class="price">9 km</li>
                                                            <li class="like"><a href="/account/messages"><i
                                                                        class="lni lni-envelope"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">

                                                <div class="single-item-grid">
                                                    <div class="image">
                                                        <a href="/consignee/1"><img
                                                                src="{{ asset('assets/images/items-tab/item-8.jpg') }}"
                                                                alt="#"></a>

                                                    </div>
                                                    <div class="content">
                                                        <a href="javascript:void(0)" class="tag">Restaurant</a>
                                                        <h3 class="title">
                                                            <a href="/consignee/1">Nara Kitchen</a>
                                                        </h3>
                                                        <p class="location"><a href="javascript:void(0)"><i
                                                                    class="lni lni-map-marker">
                                                                </i>Delaware, USA</a></p>
                                                        <ul class="info">
                                                            <li class="price">3 km</li>
                                                            <li class="like"><a href="/account/messages"><i
                                                                        class="lni lni-envelope"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">

                                                <div class="pagination left">
                                                    <ul class="pagination-list">
                                                        <li><a href="javascript:void(0)">1</a></li>
                                                        <li class="active"><a href="javascript:void(0)">2</a></li>
                                                        <li><a href="javascript:void(0)">3</a></li>
                                                        <li><a href="javascript:void(0)">4</a></li>
                                                        <li><a href="javascript:void(0)"><i
                                                                    class="lni lni-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-list" role="tabpanel"
                                        aria-labelledby="nav-list-tab">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-12">

                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="/consignee/1"><img
                                                                        src="{{ asset('assets/images/items-tab/item-2.jpg') }}"
                                                                        alt="#"></a>

                                                                <span class="flat-badge sale">New</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)" class="tag">Others</a>
                                                                <h3 class="title">
                                                                    <a href="/consignee/1">Restopedia</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>Karawaci, Tangerang</a></p>
                                                                <ul class="info">
                                                                    <li class="price">1 km</li>
                                                                    <li class="like"><a href="/account/messages"><i
                                                                                class="lni lni-envelope"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">

                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="/consignee/1"><img
                                                                        src="{{ asset('assets/images/items-tab/item-3.jpg') }}"
                                                                        alt="#"></a>

                                                                <span class="flat-badge sale">New</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)" class="tag">Cafe</a>
                                                                <h3 class="title">
                                                                    <a href="/consignee/1">Cafe Kita</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>Alaska, USA</a></p>
                                                                <ul class="info">
                                                                    <li class="price">6 km</li>
                                                                    <li class="like"><a href="/account/messages"><i
                                                                                class="lni lni-envelope"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">

                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="/consignee/1"><img
                                                                        src="{{ asset('assets/images/items-tab/item-1.jpg') }}"
                                                                        alt="#"></a>

                                                                <span class="flat-badge sale">New</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)" class="tag">Restaurant</a>
                                                                <h3 class="title">
                                                                    <a href="/consignee/1">Restoran Minang</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>Alam Sutera, Tangerang</a></p>
                                                                <ul class="info">
                                                                    <li class="price">8 km</li>
                                                                    <li class="like"><a href="/account/messages"><i
                                                                                class="lni lni-envelope"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">

                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="/consignee/1"><img
                                                                        src="{{ asset('assets/images/items-tab/item-4.jpg') }}"
                                                                        alt="#"></a>

                                                                <span class="flat-badge sale">New</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)" class="tag">Coffee
                                                                    Shop</a>
                                                                <h3 class="title">
                                                                    <a href="/consignee/1">FArbucks</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>Las Vegas</a></p>
                                                                <ul class="info">
                                                                    <li class="price">7 km</li>
                                                                    <li class="like"><a href="/account/messages"><i
                                                                                class="lni lni-envelope"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">

                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="/consignee/1"><img
                                                                        src="{{ asset('assets/images/items-tab/item-6.jpg') }}"
                                                                        alt="#"></a>

                                                                <span class="flat-badge rent">Recommended</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)" class="tag">Others</a>
                                                                <h3 class="title">
                                                                    <a href="/consignee/1">Warung Hidayat</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>New York, USA</a></p>
                                                                <ul class="info">
                                                                    <li class="price">4 km</li>
                                                                    <li class="like"><a href="/account/messages"><i
                                                                                class="lni lni-envelope"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">

                                                <div class="pagination left">
                                                    <ul class="pagination-list">
                                                        <li><a href="javascript:void(0)">1</a></li>
                                                        <li class="active"><a href="javascript:void(0)">2</a></li>
                                                        <li><a href="javascript:void(0)">3</a></li>
                                                        <li><a href="javascript:void(0)">4</a></li>
                                                        <li><a href="javascript:void(0)"><i
                                                                    class="lni lni-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
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

@extends('template.generic')

@section('content')
    <section class="hero-area style2 overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="hero-text wow fadeInLeft" data-wow-delay=".3s">
                        <div class="section-heading">
                            <h2>Welcome to TitipYuk</h2>
                            <p>TitipYuk helps to streamline the
                                consignment sales process and increase the visibility of local food businesses</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="search-form style2 wow fadeInRight" data-wow-delay=".5s">
                        <h3 class="heading-title">Search Here</h3>
                        <p class="sub-heding-text">There are many variations of consignee available</p>
                        <div class="row">
                            <div class="col-12 ">
                                <div class="search-input">
                                    <label for="keyword"><i class="lni lni-search-alt theme-color"></i></label>
                                    <input type="text" name="keyword" id="keyword" placeholder="keyword">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="search-input">
                                    <label for="category"><i class="lni lni-grid-alt theme-color"></i></label>
                                    <select name="category" id="category">
                                        <option value="none" selected disabled>Categories</option>
                                        <option value="restaurant">Restaurant</option>
                                        <option value="grocery-store">Grocery Store</option>
                                        <option value="minimarket">Minimarket</option>
                                        <option value="coffee-shop">Coffee Shop</option>
                                        <option value="cafe">Cafe</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="search-input">
                                    <label for="location"><i class="lni lni-map-marker theme-color"></i></label>
                                    <select name="location" id="location">
                                        <option value="none" selected disabled>Locations</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Bogor">Bogor</option>
                                        <option value="Depok">Depok</option>
                                        <option value="Tangerang">Tangerang</option>
                                        <option value="Bekasi">Bekasi</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="search-btn button">
                                    <button class="btn"><i class="lni lni-search-alt"></i> Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="categories style2">
        <div class="container">
            <div class="cat-inner">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Explore by Category</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of consignee available,
                                we have grouped it by category.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-12">
                        <a href="/consignee" class="single-cat wow fadeInUp" data-wow-delay=".2s">
                            <div class="fs-2" style="color: #5c34e4">
                                <i class="lni lni-dinner"></i>
                            </div>
                            <h3>Restaurant</h3>
                            <h5 class="total">35</h5>
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-12">
                        <a href="/consignee" class="single-cat wow fadeInUp" data-wow-delay=".4s">
                            <div class="fs-2" style="color: #5c34e4">
                                <i class="lni lni-home"></i>
                            </div>
                            <h3>Grocery Store</h3>
                            <h5 class="total">22</h5>
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-12">
                        <a href="/consignee" class="single-cat wow fadeInUp" data-wow-delay=".6s">
                            <div class="fs-2" style="color: #5c34e4">
                                <i class="lni lni-bolt"></i>
                            </div>
                            <h3>Minimarket</h3>
                            <h5 class="total">55</h5>
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-12">
                        <a href="/consignee" class="single-cat wow fadeInUp" data-wow-delay=".8s">
                            <div class="fs-2" style="color: #5c34e4">
                                <i class="lni lni-coffee-cup"></i>
                            </div>
                            <h3>Coffee Shop</h3>
                            <h5 class="total">21</h5>
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-12">
                        <a href="/consignee" class="single-cat wow fadeInUp" data-wow-delay="1s">
                            <div class="fs-2" style="color: #5c34e4">
                                <i class="lni lni-burger"></i>
                            </div>
                            <h3>Cafe</h3>
                            <h5 class="total">44</h5>
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-12">
                        <a href="/consignee" class="single-cat wow fadeInUp" data-wow-delay="1.2s">
                            <div class="fs-2" style="color: #5c34e4">
                                <i class="lni lni-question-circle"></i>
                            </div>
                            <h3>Others</h3>
                            <h5 class="total">65</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-achievement section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".2s">
                        <h3 class="counter"><span id="secondo1" class="countup" cup-end="1250">1250</span>+</h3>
                        <p>Consignee</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".4s">
                        <h3 class="counter"><span id="secondo2" class="countup" cup-end="350">350</span>+</h3>
                        <p>Locations</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                        <h3 class="counter"><span id="secondo3" class="countup" cup-end="2500">2500</span>+</h3>
                        <p>Consignor</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                        <h3 class="counter"><span id="secondo3" class="countup" cup-end="250">250</span>+</h3>
                        <p>Products</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Why Choose Us</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">We pride ourselves on connecting local food
                            businesses and fostering a sense of community within the industry.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="choose-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-list wow fadeInUp" data-wow-delay=".2s">
                                    <i class="lni lni-book"></i>
                                    <h4>Easy to use</h4>
                                    <p>Our website is designed with a user-friendly interface that makes it simple and
                                        straightforward for consignors and consignees to connect. You can easily find the
                                        most suitable consignees for your products and manage your consignment sales
                                        hassle-free.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-list wow fadeInUp" data-wow-delay=".4s">
                                    <i class="lni lni-leaf"></i>
                                    <h4>Reliable and efficient service</h4>
                                    <p>At TitipYuk, we are committed to providing a reliable and efficient service. Our
                                        platform is designed to help you save time and money, while also increasing the
                                        visibility of your products. You can trust us to provide a secure and hassle-free
                                        platform for all your consignment sales needs.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-list wow fadeInUp" data-wow-delay=".6s">
                                    <i class="lni lni-laptop-phone"></i>
                                    <h4>Fully Responsive</h4>
                                    <p>Our website is designed with a fully responsive layout, meaning that it can be
                                        accessed and used seamlessly on all devices, including desktops, tablets, and
                                        smartphones. This ensures that you can easily manage your consignment sales
                                        on-the-go, without having to worry about compatibility issues. With TitipYuk, you
                                        can rest assured that your experience will be smooth and hassle-free, no matter what
                                        device you use.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-action overlay section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="inner">
                        <div class="content">
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Do you have something to sell?</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">Post your products for free on TitipYuk</p>
                            <div class="button wow fadeInUp" data-wow-delay=".8s">
                                <a href="javascript:void(0)" class="btn">Add a product now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="items-tab section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Trending Consignee</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">These are some new consignee with high visitors.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-latest-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-latest" type="button" role="tab" aria-controls="nav-latest"
                                aria-selected="true">Latest Consignee</button>
                            <button class="nav-link" id="nav-popular-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular"
                                aria-selected="false">Popular
                                Consignee</button>
                            <button class="nav-link" id="nav-random-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-random" type="button" role="tab" aria-controls="nav-random"
                                aria-selected="false">Random
                                Consignee</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-latest" role="tabpanel"
                            aria-labelledby="nav-latest-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-1.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Restoran</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Restoran Minang</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Boston</a></p>
                                            <ul class="info">
                                                <li class="price">2 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-2.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Others</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Restopedia</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>San Francisco</a></p>
                                            <ul class="info">
                                                <li class="price">8 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-3.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Cafe</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Rocky Rooster</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Alaska, USA</a></p>
                                            <ul class="info">
                                                <li class="price">12 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-4.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Minimarket</a>
                                            <h3 class="title">
                                                <a href="item-details.html">My Mart</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Las Vegas</a></p>
                                            <ul class="info">
                                                <li class="price">9 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-5.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Minimarket</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Love Mart</a>
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

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-6.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge rent">Recommended</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">coffee shop</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Kisah Kopi</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>New York, USA</a></p>
                                            <ul class="info">
                                                <li class="price">21 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-7.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Cafe</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Cafein</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Delhi, India</a></p>
                                            <ul class="info">
                                                <li class="price">8 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-8.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Restoran</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Restorang Padang</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Delaware, USA</a></p>
                                            <ul class="info">
                                                <li class="price">9 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-2.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Others</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Restopedia</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>San Francisco</a></p>
                                            <ul class="info">
                                                <li class="price">8 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-3.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Cafe</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Rocky Rooster</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Alaska, USA</a></p>
                                            <ul class="info">
                                                <li class="price">12 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-1.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Restoran</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Restoran Minang</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Boston</a></p>
                                            <ul class="info">
                                                <li class="price">2 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-4.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Minimarket</a>
                                            <h3 class="title">
                                                <a href="item-details.html">My Mart</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Las Vegas</a></p>
                                            <ul class="info">
                                                <li class="price">9 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-7.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Cafe</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Cafein</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Delhi, India</a></p>
                                            <ul class="info">
                                                <li class="price">8 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-8.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Restoran</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Restorang Padang</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Delaware, USA</a></p>
                                            <ul class="info">
                                                <li class="price">9 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-5.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Minimarket</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Love Mart</a>
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

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-6.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge rent">Recommended</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">coffee shop</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Kisah Kopi</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>New York, USA</a></p>
                                            <ul class="info">
                                                <li class="price">21 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-random" role="tabpanel" aria-labelledby="nav-random-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-3.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Cafe</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Rocky Rooster</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Alaska, USA</a></p>
                                            <ul class="info">
                                                <li class="price">12 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-4.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Minimarket</a>
                                            <h3 class="title">
                                                <a href="item-details.html">My Mart</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Las Vegas</a></p>
                                            <ul class="info">
                                                <li class="price">9 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-5.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Minimarket</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Love Mart</a>
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

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-1.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Restoran</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Restoran Minang</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Boston</a></p>
                                            <ul class="info">
                                                <li class="price">2 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-2.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Others</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Restopedia</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>San Francisco</a></p>
                                            <ul class="info">
                                                <li class="price">8 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-6.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge rent">Recommended</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">coffee shop</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Kisah Kopi</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>New York, USA</a></p>
                                            <ul class="info">
                                                <li class="price">21 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-7.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Cafe</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Cafein</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Delhi, India</a></p>
                                            <ul class="info">
                                                <li class="price">8 km</li>
                                                <li class="like"><a href="/account/messages"><i
                                                            class="lni lni-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-8.jpg"
                                                    alt="#"></a>
                                            <span class="flat-badge sale">New</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Restoran</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Restorang Padang</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Delaware, USA</a></p>
                                            <ul class="info">
                                                <li class="price">9 km</li>
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
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title align-center gray-bg">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">What People Say</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Hear what our consignor says.</p>
                    </div>
                </div>
            </div>
            <div class="row testimonial-slider">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-testimonial">
                        <div class="quote-icon">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="author">
                            <img src="assets/images/testimonial/testi1.jpg" alt="#">
                            <h4 class="name">
                                Jane Anderson
                                <span class="deg">Food Blogger</span>
                            </h4>
                        </div>
                        <div class="text">
                            <p>"as a food blogger, I'm always on the lookout for new and exciting food businesses to
                                feature.
                                I came across TitipYuk recently, and I'm impressed with the selection of locally made goods
                                available. The platform is easy to navigate, and the products are of high quality. I will
                                definitely be recommending TitipYuk to my readers."</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-testimonial">
                        <div class="quote-icon">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="author">
                            <img src="assets/images/testimonial/testi2.jpg" alt="#">
                            <h4 class="name">
                                Devid Samuyel
                                <span class="deg">Consignor</span>
                            </h4>
                        </div>
                        <div class="text">
                            <p>"I've been using TitipYuk for several months now, and I'm thrilled with the results. The
                                platform is easy to use, and I've been able to connect with a variety of consignees to sell
                                my homemade baked goods. I appreciate the support and sense of community that TitipYuk
                                provides."</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-testimonial">
                        <div class="quote-icon">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="author">
                            <img src="assets/images/testimonial/testi3.jpg" alt="#">
                            <h4 class="name">
                                Jully Sulli
                                <span class="deg">Consigne</span>
                            </h4>
                        </div>
                        <div class="text">
                            <p>"TitipYuk has been a game-changer for my cafe. With the platform, I can easily find and
                                connect with local consignors who provide high-quality and unique products. The website is
                                user-friendly, and the customer support is excellent. I highly recommend TitipYuk to anyone
                                looking to expand their product offerings."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how-works section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">How it Works</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">We make it as easy as possible</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-work wow fadeInUp" data-wow-delay=".2s">
                        <span class="serial">01</span>
                        <h3>Create Account</h3>
                        <p>Creat an account by click "Register" on top, select your account type: Consignor is the person
                            who gives the goods to the consignee for selling, and Consignee is the person who receives the
                            goods from the consignor for selling..</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-work wow fadeInUp" data-wow-delay=".4s">
                        <span class="serial">02</span>
                        <h3>Add your products or places</h3>
                        <p>Add your products so consignee can see the details when you apply for consign or add your place.
                            so consignor can consign at your place</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-work wow fadeInUp" data-wow-delay=".6s">
                        <span class="serial">03</span>
                        <h3>Consign</h3>
                        <p>If you are consignor, you can start to consign at places that listed. If you are a consignee,
                            relax and wait consignor to request consign</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="newsletter section">
        <div class="container">
            <div class="inner-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="title">
                            <i class="lni lni-alarm"></i>
                            <h2>Newsletter</h2>
                            <p>We don't send spam so don't worry.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form">
                            <form action="#" method="get" target="_blank" class="newsletter-form">
                                <input name="EMAIL" placeholder="Your email address" type="email">
                                <div class="button">
                                    <button class="btn">Subscribe<span class="dir-part"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

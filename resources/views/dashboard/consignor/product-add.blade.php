@extends('template.sidebar')

@section('title', 'Add Product')

@section('sidebar-content')
    <div class="dashboard-block mt-0">
        <h3 class="block-title">Add Product</h3>
        <div class="inner-block">

            <div class="post-ad-tab">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-item-info-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-item-info" type="button" role="tab" aria-controls="nav-item-info"
                            aria-selected="true">
                            <span class="serial">01</span>
                            Step
                            <span class="sub-title">Product Information</span>
                        </button>
                        <button class="nav-link" id="nav-item-details-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-item-details" type="button" role="tab"
                            aria-controls="nav-item-details" aria-selected="false">
                            <span class="serial">02</span>
                            Step
                            <span class="sub-title">Product Details</span>
                        </button>
                    </div>
                </nav>
                <form method="POST" action="{{ route('product.add') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-item-info" role="tabpanel"
                            aria-labelledby="nav-item-info-tab">
                            <div class="step-one-content">
                                <div class="default-form-style">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Product Name*</label>
                                                <input id="product-name" name="title" type="text"
                                                    placeholder="Enter Title">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Category*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select" name="category">
                                                        <option value="none">Select a Category</option>
                                                        @foreach ($categories as $cat)
                                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button mb-0">
                                                <button type="button" class="btn "
                                                    onclick="goTab('nav-item-details-tab')">Next
                                                    Step</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-item-details" role="tabpanel"
                            aria-labelledby="nav-item-details-tab">
                            <div class="step-two-content">
                                <div class="default-form-style">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Add Price*</label>
                                                <input id="product-price" name="price" type="text"
                                                    placeholder="Enter Price">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Select Payment Method*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select" name="payment-option">
                                                        <option value="none">Select an option</option>
                                                        <option value="cash">Cash</option>
                                                        <option value="transfer">Transfer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="upload-input">
                                                <input type="file" id="upload" name="product-image"
                                                    onchange="preview()">
                                                <label for="upload" class="text-center content">
                                                    <span class="text">
                                                        <span class="d-block mb-15">Drop files anywhere
                                                            to Upload</span>
                                                        <span class=" mb-15 plus-icon"><i class="lni lni-plus"></i></span>
                                                        <span class="main-btn d-block btn-hover">Select
                                                            File</span>
                                                        <span class="d-block">Maximum upload file size
                                                            10Mb</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <img id="frame" src="" class="img-fluid" />
                                            <button type="button" onclick="clearImage()"
                                                class="btn btn-primary mt-2">Clear</button>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mt-30">
                                                <label>Product Description*</label>
                                                <textarea id="product-description" name="message" placeholder="Input product description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I agree to all Terms of Use & Posting Rules
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <div class="form-group button mb-0">
                                                <button type="button" class="btn alt-btn"
                                                    onclick="goTab('nav-item-details-tab')">Previous</button>
                                                <button type="submit" class="btn ">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script>
        function goTab(tabId) {
            // Get the current tab and content
            const currentTab = document.querySelector('.nav-link.active');
            const currentTabContent = document.querySelector('.tab-pane.fade.show.active');

            // Get the target tab and content
            const targetTab = document.getElementById(tabId);
            const targetTabContent = document.getElementById(targetTab.getAttribute('data-bs-target').slice(1));

            if (currentTab.id < targetTab.id) {
                // Move to next tab
                currentTab.classList.remove('active');
                currentTab.setAttribute('aria-selected', false);
                currentTabContent.classList.remove('show', 'active');

                targetTab.classList.add('active');
                targetTab.setAttribute('aria-selected', true);
                targetTabContent.classList.add('show', 'active');
            } else {
                // Move to previous tab
                targetTab.classList.add('active');
                targetTab.setAttribute('aria-selected', true);
                targetTabContent.classList.add('show', 'active');

                currentTab.classList.remove('active');
                currentTab.setAttribute('aria-selected', false);
                currentTabContent.classList.remove('show', 'active');
            }
        }

        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }

        function clearImage() {
            document.getElementById('upload').value = null;
            frame.src = "";
        }
    </script>

@endsection

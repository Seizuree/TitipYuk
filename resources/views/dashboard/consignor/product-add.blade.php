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
                        <button class="nav-link" id="nav-user-info-tab" data-bs-toggle="tab" data-bs-target="#nav-user-info"
                            type="button" role="tab" aria-controls="nav-user-info" aria-selected="false">
                            <span class="serial">03</span>
                            Step
                            <span class="sub-title">User Information</span>
                        </button>
                    </div>
                </nav>
                <form action="#" method="post">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-item-info" role="tabpanel"
                            aria-labelledby="nav-item-info-tab">

                            <div class="step-one-content">
                                <div class="default-form-style">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Add Title*</label>
                                                <input name="title" type="text" placeholder="Enter Title">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Category*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select">
                                                        <option value="none">Select a Category</option>
                                                        <option value="snack">Snack</option>
                                                        <option value="appetizer">Appetizer</option>
                                                        <option value="Sweets and desserts">Sweets and desserts</option>
                                                        <option value="drinks">Drinks</option>
                                                        <option value="fruits">Fruits</option>
                                                        <option value="vegetables">Vegetables</option>
                                                        <option value="Meat, Poultry, and Seafood">Meat, Poultry, and
                                                            Seafood
                                                        </option>
                                                        <option value="Dairy products">Dairy products</option>
                                                        <option value="Grains, nuts, and seeds">Meat</option>
                                                        <option value="">others</option>
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
                                                <input name="price" type="text" placeholder="Enter Price">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Select Payment Method*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select">
                                                        <option value="none">Select an option</option>
                                                        <option value="cash">Cash</option>
                                                        <option value="transfer">Transfer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="upload-input">
                                                <input type="file" id="upload" name="upload" onchange="preview()">
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
                                                <textarea name="message" placeholder="Input product description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="tag-label">Tags* <span>Comma(,)
                                                        separated</span></label>
                                                <input name="tag" type="text" placeholder="Type Product tag">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button mb-0">
                                                <button type="button" class="btn alt-btn"
                                                    onclick="goTab('nav-item-info-tab')">Previous</button>
                                                <button type="button" class="btn "
                                                    onclick="goTab('nav-user-info-tab')">Next
                                                    Step</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-user-info" role="tabpanel"
                            aria-labelledby="nav-user-info-tab">

                            <div class="step-three-content">
                                <div class="default-form-style">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Name*</label>
                                                <input name="name" type="text" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Mobile Numbe*</label>
                                                <input name="number" type="text" placeholder="Enter mobile number">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Country*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select">
                                                        <option value="none">Select a Country</option>
                                                        <option value="none">Afghanistan</option>
                                                        <option value="none">America</option>
                                                        <option value="none">Albania</option>
                                                        <option value="none">Bangladesh</option>
                                                        <option value="none">Brazil</option>
                                                        <option value="none">India</option>
                                                        <option value="none">South Africa</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Select City*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select">
                                                        <option value="none">Select City</option>
                                                        <option value="none">New York</option>
                                                        <option value="none">Los Angeles</option>
                                                        <option value="none">Chicago</option>
                                                        <option value="none">San Diego</option>
                                                        <option value="none">San Jose</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Select State*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select">
                                                        <option value="none">Select State</option>
                                                        <option value="none">New York</option>
                                                        <option value="none">Texas</option>
                                                        <option value="none">Arizona</option>
                                                        <option value="none">Florida</option>
                                                        <option value="none">Washington</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Address*</label>
                                                <input name="address" type="text" placeholder="Enter a location">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="google-map">
                                                <div class="mapouter">
                                                    <div class="gmap_canvas"><iframe width="100%" height="300"
                                                            id="gmap_canvas"
                                                            src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                            frameborder="0" scrolling="no" marginheight="0"
                                                            marginwidth="0"></iframe><a
                                                            href="https://123movies-to.org"></a><br>
                                                        <style>
                                                            .mapouter {
                                                                position: relative;
                                                                text-align: right;
                                                                height: 300px;
                                                                width: 100%;
                                                            }
                                                        </style><a href="https://www.embedgooglemap.net">embed
                                                            google maps wordpress</a>
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
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I agree to all Terms of Use & Posting Rules
                                                </label>
                                            </div>
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

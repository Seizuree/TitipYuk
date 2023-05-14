@extends('template.generic')

@section('content')
    <section class="dashboard section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">

                    <div class="dashboard-sidebar">
                        <div class="user-image">
                            <img src="{{ asset('assets/images/dashboard/user-image.jpg') }}" alt="#">
                            <h3>Steve Aldridge
                                <span><a href="javascript:void(0)">consignee</a></span>
                            </h3>
                        </div>
                        <div class="dashboard-menu">
                            <ul>
                                <li><a class="{{ Route::currentRouteName() == 'account.dashboard' ? 'active' : '' }}"
                                        href="{{ route('account.dashboard') }}"><i class="lni lni-dashboard"></i>
                                        Dashboard</a></li>
                                <li><a class="{{ Route::currentRouteName() == 'account.settings' ? 'active' : '' }}"
                                        href="{{ route('account.settings') }}"><i class="lni lni-pencil-alt"></i> Edit
                                        Profile</a>
                                </li>
                                <li><a class="{{ Route::currentRouteName() == 'account.products' ? 'active' : '' }}"
                                        href="{{ route('account.products') }}"><i class="lni lni-layers"></i> My
                                        Products</a>
                                </li>
                                <li><a class="{{ Route::currentRouteName() == 'account.product-add' ? 'active' : '' }}"
                                        href="{{ route('account.product-add') }}"><i class="lni lni-circle-plus"></i> Add
                                        Product</a></li>
                                <li><a class="{{ Route::currentRouteName() == 'account.places' ? 'active' : '' }}"
                                        href="{{ route('account.places') }}"><i class="lni lni-layers"></i> My
                                        Places</a>
                                </li>
                                <li><a class="{{ Route::currentRouteName() == 'account.place-add' ? 'active' : '' }}"
                                        href="{{ route('account.place-add') }}"><i class="lni lni-circle-plus"></i> Add
                                        Place</a></li>

                                <li><a class="{{ Route::currentRouteName() == 'account.messages' ? 'active' : '' }}"
                                        href="{{ route('account.messages') }}"><i class="lni lni-envelope"></i>
                                        Messages</a>
                                </li>
                                <li><a class="{{ Route::currentRouteName() == 'account.delete' ? 'active' : '' }}"
                                        href="{{ route('account.delete') }}"><i class="lni lni-trash"></i> Close
                                        account</a></li>
                                <li><a class="{{ Route::currentRouteName() == 'account.product-return' ? 'active' : '' }}"
                                        href="{{ route('account.product-return') }}"><i class="lni lni-printer"></i>
                                        Return</a></li>
                            </ul>
                            <div class="button">
                                <a class="btn" href="javascript:void(0)">Logout</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="main-content">
                        @yield('sidebar-content')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

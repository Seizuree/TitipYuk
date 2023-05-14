@extends('template.sidebar')

@section('title', 'Close Account')

@section('sidebar-content')

    <div class="details-lists">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">

                <div class="single-list">
                    <div class="list-icon">
                        <i class="lni lni-layers"></i>
                    </div>
                    <h3>
                        34
                        <span>Total Product/Place</span>
                    </h3>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">

                <div class="single-list two">
                    <div class="list-icon">
                        <i class="lni lni-bolt"></i>
                    </div>
                    <h3>
                        23
                        <span>Consign </span>
                    </h3>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">

                <div class="single-list three">
                    <div class="list-icon">
                        <i class="lni lni-reply"></i>
                    </div>
                    <h3>
                        2
                        <span>Return </span>
                    </h3>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">

                <div class="single-list">
                    <div class="list-icon">
                        <i class="lni lni-revenue"></i>
                    </div>
                    <h3>
                        Rp.1.050.000,-
                        <span>Revenue</span>
                    </h3>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-12">

                <div class="single-list two">
                    <div class="list-icon">
                        <i class="lni lni-dollar"></i>
                    </div>
                    <h3>
                        Rp.350.000,-
                        <span>Profit </span>
                    </h3>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12 col-12">

            <div class="activity-log dashboard-block">
                <h3 class="block-title">My Activity Log</h3>
                <ul>
                    <li>
                        <div class="log-icon">
                            <i class="lni lni-alarm"></i>
                        </div>
                        <a href="javascript:void(0)" class="title">Your Profile Updated!</a>
                        <span class="time">12 Minutes Ago</span>
                        <span class="remove"><a href="javascript:void(0)"><i class="lni lni-close"></i></a></span>
                    </li>
                    <li>
                        <div class="log-icon">
                            <i class="lni lni-alarm"></i>
                        </div>
                        <a href="javascript:void(0)" class="title">You change your password</a>
                        <span class="time">59 Minutes Ago</span>
                        <span class="remove"><a href="javascript:void(0)"><i class="lni lni-close"></i></a></span>
                    </li>
                    <li>
                        <div class="log-icon">
                            <i class="lni lni-alarm"></i>
                        </div>
                        <a href="javascript:void(0)" class="title">Your consign approved!</a>
                        <span class="time">5 Hours Ago</span>
                        <span class="remove"><a href="javascript:void(0)"><i class="lni lni-close"></i></a></span>
                    </li>
                    <li>
                        <div class="log-icon">
                            <i class="lni lni-alarm"></i>
                        </div>
                        <a href="javascript:void(0)" class="title">You submit a new consign</a>
                        <span class="time">8 hours Ago</span>
                        <span class="remove"><a href="javascript:void(0)"><i class="lni lni-close"></i></a></span>
                    </li>
                    <li>
                        <div class="log-icon">
                            <i class="lni lni-alarm"></i>
                        </div>
                        <a href="javascript:void(0)" class="title">You subscribe as a pro user!</a>
                        <span class="time">1 day Ago</span>
                        <span class="remove"><a href="javascript:void(0)"><i class="lni lni-close"></i></a></span>
                    </li>
                </ul>
            </div>

        </div>
        <div class="col-lg-6 col-md-12 col-12">

            <div class="recent-items dashboard-block">
                <h3 class="block-title">Recent Consign</h3>
                <ul>
                    <li>
                        <div class="image">
                            <a href="javascript:void(0)"><img
                                    src="{{ asset('assets/images/dashboard/recent-items/item1.jpg') }}" alt="#"></a>
                        </div>
                        <a href="javascript:void(0)" class="title">iPhone 11 Pro Max</a>
                        <span class="time">12 Minutes Ago</span>
                    </li>
                    <li>
                        <div class="image">
                            <a href="javascript:void(0)"><img
                                    src="{{ asset('assets/images/dashboard/recent-items/item2.jpg') }}" alt="#"></a>
                        </div>
                        <a href="javascript:void(0)" class="title">Polaris 600 Assault 144</a>
                        <span class="time">5 days Ago</span>
                    </li>
                    <li>
                        <div class="image">
                            <a href="javascript:void(0)"><img
                                    src="{{ asset('assets/images/dashboard/recent-items/item3.jpg') }}" alt="#"></a>
                        </div>
                        <a href="javascript:void(0)" class="title">Brand New Bagpack</a>
                        <span class="time">1 week Ago</span>
                    </li>
                    <li>
                        <div class="image">
                            <a href="javascript:void(0)"><img
                                    src="{{ asset('assets/images/dashboard/recent-items/item4.jpg') }}" alt="#"></a>
                        </div>
                        <a href="javascript:void(0)" class="title">Honda Civic VTi 2023</a>
                        <span class="time">3 week Ago</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection

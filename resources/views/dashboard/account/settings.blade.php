@extends('template.sidebar')

@section('title', 'Profile Settings')

@section('sidebar-content')
    <div class="dashboard-block mt-0 profile-settings-block">
        <h3 class="block-title">Profile Settings</h3>
        <div class="inner-block">
            <div class="image">
                <img src="{{ asset('assets/images/dashboard/user-image.jpg') }}" alt="#">
            </div>
            <form class="profile-setting-form" method="post" action="#">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label>Name*</label>
                            <input name="name" type="text" placeholder="Steve">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label>Email Address*</label>
                            <input name="email" type="email" placeholder="username@gmail.com">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group upload-image">
                            <label>Profile Image*</label>
                            <input name="profile-image" type="file" placeholder="Upload Image">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group button mb-0">
                            <button type="submit" class="btn ">Update Profile</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="dashboard-block password-change-block">
        <h3 class="block-title">Change Password</h3>
        <div class="inner-block">
            <form class="default-form-style" method="post" action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Current Password*</label>
                            <input name="current-password" type="password" placeholder="Enter old password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>New Password*</label>
                            <input name="new-password" type="password" placeholder="Enter new password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Retype Password*</label>
                            <input name="retype-password" type="password" placeholder="Retype password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group button mb-0">
                            <button type="submit" class="btn ">Update Password</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

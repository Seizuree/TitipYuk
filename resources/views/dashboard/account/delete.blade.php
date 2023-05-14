@extends('template.sidebar')

@section('title', 'Close Account')

@section('sidebar-content')
    <div class="dashboard-block close-content mt-0">
        <h2>Delete Your Account</h2>
        <h4>Are you sure, you want to delete your account?</h4>
        <div class="button">
            <a href="javascript:void(0)" class="btn">Delete Account</a>
            <a href="javascript:void(0)" class="btn btn-alt">Cancel</a>
        </div>
    </div>
@endsection

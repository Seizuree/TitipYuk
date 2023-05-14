@extends('template.generic')

@section('content')
    <!-- Start Error Area -->
    <div class="error-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="error-content">
                        <h1>404</h1>
                        <h2>Here Is Some Problem</h2>
                        <p>The page you are looking for it maybe deleted</p>
                        <div class="button">
                            <a href="/" class="btn">Go To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Error Area -->
@endsection

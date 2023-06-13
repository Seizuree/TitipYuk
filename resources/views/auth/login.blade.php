@extends('template.generic')

@section('title', 'Login')

@section('content')
    <section class="login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="form-head">
                        <h4 class="title">Login</h4>
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Username or email</label>
                                <input name="email" type="email" placeholder="email@domain.com">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password">
                            </div>
                            <div class="check-and-pass">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input width-auto" id="cbRemember"
                                                name="cbRemember">
                                            <label class="form-check-label" for="cbRemember">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <a href="javascript:void(0)" class="lost-pass">Lost your password?</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                @error('notmatch')
                                <strong class="error-msg">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="button">
                                <button type="submit" class="btn">Login Now</button>
                            </div>
                            <p class="outer-link">Don't have an account? <a href="/register">Register here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('template.generic')

@section('title', 'Register')

@section('content')
    <section class="login registration section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="form-head">
                        <h4 class="title">Register</h4>
                        <form class="default-form-style" action="#!" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input name="password" type="text">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" placeholder="email@domain.com">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password">
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>
                                        Select Account Type
                                        <i class="lni lni-question-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Consignor is the person who gives the goods to the consignee for selling, and Consignee is the person who receives the goods from the consignor for selling."></i>
                                    </label>
                                    <div class="selector-head">
                                        <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                        <select class="user-chosen-select">
                                            <option value="consignor">Consignor</option>
                                            <option value="consignee">Consignee</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="check-and-pass">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input width-auto" id="cbTerm"
                                                name="cbTerm">
                                            <label class="form-check-label" for="cbTerm">Agree to our <a href="/toc"
                                                    target="_blank">Terms
                                                    and
                                                    Conditions</a></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button">
                                <button type="submit" class="btn">Registration</button>
                            </div>
                            <p class="outer-link">Already have an account? <a href="/login"> Login Now</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

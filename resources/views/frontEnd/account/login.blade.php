@extends('frontEnd.layouts.master')
@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Đăng nhập</h2>
                        <p>Trang chủ <span>-</span> Đăng nhập</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

 <!--================login_part Area =================-->
 <section class="login_part padding_top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="login_part_text text-center">
                    <div class="login_part_form_iner">
                        <h2 style="text-align: center; margin-bottom: 40px;">Đăng kí tài khoản</h2>
                        @include('noti.error')
                        @include('noti.success')
                        <form class="row contact_form" action="{{ url('register') }}" method="post" novalidate="novalidate">
                            {!! csrf_field() !!}
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="name" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="rePassword" name="password" placeholder="Nhập lại mật khẩu">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Họ tên">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="name" name="phone" placeholder="Số điện thoại">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="name" name="address" placeholder="Địa chỉ">
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="btn btn-success">
                                    Đăng kí
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h2 style="text-align: center; margin-bottom: 40px;">Đăng nhập</h2>
                        <form class="row contact_form" action="{{ url('login') }}" method="post" novalidate="novalidate">
                            {!! csrf_field() !!}
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="name" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="btn_3">
                                    Đăng nhập
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================login_part end =================-->

@endsection
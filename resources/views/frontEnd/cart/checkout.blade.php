@extends('frontEnd.layouts.master')

@section('title', 'Check out')

@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
                <h2>Producta Checkout</h2>
                <p>Home <span>-</span> Shop Single</p>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->


<!--================Checkout Area =================-->
<section class="checkout_area padding_top">
    <div class="container">
        <div class="billing_details">
        <div class="row">
            <div class="col-lg-8">
            <h3>Thông tin thanh toán</h3>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                <div class="col-md-8 form-group p_star">
                    <input type="text" value="{{ $user->name }}" class="form-control"  name="name" placeholder="Họ tên" />
                </div>
                <div class="col-md-6 form-group p_star">
                    <input type="text" value="{{ $user->phone }}" class="form-control" name="phone" placeholder="Số điện thoại"/>
                </div>
                <div class="col-md-6 form-group p_star">
                    <input type="text" value="{{ $user->email }}" class="form-control"  name="email" placeholder="Email"/>
                </div>
                <div class="col-md-12 form-group p_star">
                    <input type="text" value="{{ $user->address }}" class="form-control"  name="address" placeholder="Địa chỉ" />
                </div>
                <div class="col-md-12 form-group p_star">
                    <input type="text" class="form-control" name="note" placeholder="Ghi chú" />
                </div>
            </form>
            </div>
            <div class="col-lg-4">
            <div class="order_box">
                <h2>Sản phẩm bạn đặt</h2>
                <ul class="list">
                    <li>
                        <a href="#">Sản phẩm
                        <span>Tổng</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">Fresh Blackberry
                        <span class="middle">x 02</span>
                        <span class="last">$720.00</span>
                        </a>
                    </li>
                </ul>
                <ul class="list list_2">
                    <li>
                        <a href="#">Tổng tiền
                        <span>$2210.00</span>
                        </a>
                    </li>
                </ul>
                <br>
                <a class="btn_3" href="{{ url('cart/confirm') }}">Thanh toán</a>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->
@endsection
    
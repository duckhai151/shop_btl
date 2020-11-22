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
            <form class="row contact_form" action="{{ url('cart/confirm') }}" method="post" novalidate="novalidate">
                {!! csrf_field() !!}
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
                    @foreach ($cartItem as $key => $item)
                        <li>
                            <a href="#">{{ $item['quantity'] }} x {{ $item['name'] }}
                            <span class="last">{{ $item['total_price'] }} VNĐ</span>
                            </a>
                        </li>
                        <input type="hidden" name="item[{{$key}}][product_id]" value="{{ $item['product_id'] }}">
                        <input type="hidden" name="item[{{$key}}][name]" value="{{ $item['name'] }}">
                        <input type="hidden" name="item[{{$key}}][quantity]" value="{{ $item['quantity'] }}">
                        <input type="hidden" name="item[{{$key}}][total_price]" value="{{ $item['total_price'] }}">
                    @endforeach      
                </ul>
                <ul class="list list_2">
                    <li>
                        <a href="#">Tổng tiền
                        <span>{{ $totalMoney }} VNĐ</span>
                        <input type="hidden" name="total_money" value="{{ $totalMoney }}">
                        </a>
                    </li>
                </ul>
                <br>
                <button class="btn_3" style="margin-left: 110px;" type="submit">Thanh toán</button>
            </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->
@endsection
    
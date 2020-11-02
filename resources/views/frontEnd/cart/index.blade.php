@extends('frontEnd.layouts.master')

@section('content')
<!--================Home Banner Area =================-->
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="breadcrumb_iner">
          <div class="breadcrumb_iner_item">
            <h2>Giỏ hàng</h2>
            <p>Trang chủ <span>-</span>Giỏ hàng</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumb start-->

<!--================Cart Area =================-->
<section class="cart_area padding_top">
  <div class="container">
    <div class="cart_inner">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Sản phẩm</th>
              <th scope="col">Đơn giá</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Tổng tiền</th>
              <th scope="col">Thao tác</th>
            </tr>
          </thead>
          <tbody>
            <form action="#" method="POST">
            @foreach ($cartItem as $item)
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="{{ url('images/products', $item['image']) }}" width="100px" height="100px" alt="" />
                    </div>
                    <div class="media-body">
                      <p>{{ $item['name'] }}</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>{{ $item['price'] }} VNĐ</h5>
                </td>
                <td>
                  <div class="product_count">
                    <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>
                    <input class="input-number" type="text" value="{{ $item['quantity'] }}" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                  </div>
                </td>
                <td>
                  <h5>{{ $item['total_price'] }} VNĐ</h5>
                </td>
                <td>
                  <h5 style="padding-left:20px;"><a href="#"><i class="fas fa-trash-alt fa-2x"></i></a></h5>
                </td>
              </tr>
            @endforeach   
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <h5>Tổng tiền</h5>
              </td>
              <td>
                <h5>{{ $totalMoney }} VNĐ</h5>
                <input type="hidden" name="total_money" value="{{ $totalMoney }}">
              </td>
            </tr>
          </form>
          </tbody>
        </table>
        <div class="checkout_btn_inner float-right">
          <a class="btn_1 checkout_btn_1" href="{{ url('cart/checkout') }}">Xác nhận thanh toán</a>
        </div>
      </div>
    </div>
</section>
<!--================End Cart Area =================-->
@endsection
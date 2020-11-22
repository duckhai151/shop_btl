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
            <form action="{{ url('cart/checkout') }}" method="POST">
            {!! csrf_field() !!}
            @foreach ($cartItem as $key => $item)
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
                  <h5>{{ $item['price'] }}  VNĐ</h5>
                </td>
                <td>
                  <div class="product_count">
                    <input onclick="checkId({{$item['product_id']}}, {{$item['price']}})" id="quantity{{$item['product_id']}}" class="input-number" type="number" value="{{ $item['quantity'] }}" min="0" max="10">
                  </div>
                </td>
                <td>
                  <h5>{{ $item['total_price'] }} VNĐ</h5>
                </td>
                <td>
                  <h5 style="padding-left:20px;"><a href="{{ url('cart/delete', $key) }}"><i class="fas fa-trash-alt fa-2x"></i></a></h5>
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
          </tbody>
        </table>
        <div class="checkout_btn_inner float-right">
          <button  class="btn_3" type="submit">Xác nhận thanh toán</button>
        </div>
      </form>
      <input id="test1" type="text" value="ss">
      </div>
    </div>
</section>
<!--================End Cart Area =================-->
@endsection

@section('script')
<script language="javascript">
  function checkId(id, price) {
    var quantityId = '#quantity' + id;
    var totalPrice = $(quantityId).val()*price;
    $("#test1").attr("value", "500");
  }
</script>
@endsection
@extends('frontEnd.layouts.master')

@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="breadcrumb_iner">
          <div class="breadcrumb_iner_item">
            <h2>Chi tiết sản phẩm</h2>
            <p>Trang chủ <span>-</span> Chi tiết sản phẩm</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumb start-->

<!--================Single Product Area =================-->
<div class="product_image_area section_padding" style="padding-bottom: 0px;">
  <div class="container">
    <div class="row s_product_inner">
      <div class="col-lg-7 col-xl-7">
        <div class="product_slider_img">
          <div id="vertical">
            <div data-thumb="{{ url('images/products', $product->img) }}">
              <img style="height: 450px;" src="{{ url('images/products', $product->img) }}" />
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-xl-4">
        <div class="s_product_text">
          <h3>{{ $product->name }}</h3>
          <h2>{{ $product->price }} <span>VNĐ</span></h2>
          <ul class="list">
            <li>
              <a class="active" href="#">
                <span>Danh mục</span> :  
                @foreach ($product->categories as $category)
                  {{ $category->name }}
                @endforeach
              </a>
            </li>
            <li>
              <a href="#"> <span>Kích thước</span> : {{ $product->size }} </a>
            </li>
            @if ($product->stock > 0)
              <li>
                <a href="#"> <span>Tình trạng</span> : Còn hàng</a>
              </li>
            @else
              <li>
                <a href="#"> <span>Tình trạng</span> : Hết hàng</a>
              </li>
            @endif
            
            <br>
          </ul>
          <form action="{{ url('cart') }}" method="POST">
          <div class="card_area d-flex justify-content-between align-items-center">
            <div class="product_count">
              {{-- <span class="inumber-decrement"> <i class="ti-minus"></i></span> --}}
              <input id="quantity" class="input-number" type="number" name="quantity" value="1" min="0" max="{{$product->stock}}">
              {{-- <span class="number-increment"> <i class="ti-plus"></i></span> --}}
            </div>
              {!! csrf_field() !!}
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <input type="hidden" name="name" value="{{ $product->name }}">
              <input type="hidden" id= 'price' name="price" value="{{ $product->price }}">
              <input type="hidden" name="image" value="{{ $product->img }}">
              @if ($product->stock > 0)
                <button class="btn_3">add to cart</button>
              @endif
            </form>
          </div>
          @include('noti.success')

        </div>
      </div>
    </div>
  </div>
</div>
<!--================End Single Product Area =================-->



<!--Comment -->
<div class="container">
  <div class="row" style="padding: 0px 15px;" >
      <p>
        {{ $product->description }}
      </p>
  </div>
  <div class="row" style="margin-top: 50px;">
    <div class="col-lg-6">
      <div class="comment_list">
        @foreach ($comments as $comment)
          <div class="review_item">
            <div class="media">
              <div class="media-body">
                <h3>{{ $comment->user->name }}</h3>
                <h5>{{ $comment->created_at }}</h5>
              </div>
            </div>
            <p>
              {{ $comment->content }}
            </p>
          </div> 
        @endforeach
        
      </div>
    </div>
    <div class="col-lg-6">
      <div class="review_box">
        @include('noti.error')
        <h4>Bình luận cho sản phẩm</h4>
        @if (Auth::check())
          <form class="row contact_form" action="{{ url('comment') }}" method="POST">
              {!! csrf_field() !!}
              <div class="col-md-12">
                <div class="form-group">
                  <textarea name="content" cols="80" rows="10" placeholder="Nhập nội dung ..."></textarea>
                </div>
              <input type="hidden" value="{{ $product->id }}" name="product_id">
              </div>
              <div class="col-md-12 text-right">
                <button type="submit" value="submit" class="btn_3">
                  Đăng
                </button>
              </div>
          </form>
        @else
          <h3>Hãy đăng nhập để bình luận</h3><br>
          <a class="btn_3" href="{{ url('login') }}">
            Đăng nhập
          </a>
        @endif
      </div>
    </div>
  </div>
</div>

 <!-- product_list start-->
 <section class="product_list section_padding" style="padding-bottom: 0px">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="section_tittle text-center">
                <h2>Mới nhất <span>sản phẩm</span></h2>
            </div>
        </div>
        <div class="col-lg-2">
          <a href="{{ url('/product/index') }}" class="btn btn-light">Xem tất cả</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
          <div class="row align-items-center justify-content-between">
              @foreach($latestProducts as $product)
                  <div class="col-lg-3 col-sm-6">
                      <div class="single_product_item">
                          <a href="{{ url('product/detail', $product->id) }}">
                            <img src="{{ url('images/products', $product->img) }}" alt="">
                          </a>
                          <div class="single_product_text">
                              <h4>{{ $product->name }}</h4>
                              <h3>{{ $product->price }} <span>VNĐ</span></h3>
                              <a href="{{ url('product/detail', $product->id) }}" class="add_cart">Chi tiết sản phẩm</a>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
        </div>
    </div>
  </div>
</section>
<!-- product_list part start-->

@endsection
@section('script')

@endsection
@extends('frontEnd.layouts.master')
@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
                <h2>Sản phẩm</h2>
                <p>Trang chủ <span>-</span> Tìm kiếm </p>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->   

<!-- product_list start-->
<section class="product_list section_padding" style="padding-bottom: 0px">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Tất cả <span>Sản phẩm</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row align-items-center justify-content-between">
                        @include('noti.error')
                        @if (count($productsByKey) == 0)
                            <div class="col-lg-12 col-sm-12">
                                <h1 style="margin-bottom: 20px;">Rất tiếc. Không tìm thấy sản phẩm bạn yêu cầu .</h1>   
                                <img src="{{ url('images/other/404search.jpg')}}" alt=""> 
                            </div> 
                        @endif
                        @foreach($productsByKey as $product)
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                <img width="250px" height="300px" src="{{ url('images/products', $product->img) }}" alt="">
                                    <div class="single_product_text">
                                        <h4>{{ $product->name }}</h4>
                                        <h3>{{ $product->price }} <span>VNĐ</span></h3>
                                        <a href="{{ url('product/detail', $product->id) }}" class="add_cart">Chi tiết sản phẩm</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- {{ $allProducts->links('vendor.pagination.bootstrap-4') }} --}}
                </div>
            </div>
    </div>
</section>
<!-- product_list part start-->
@endsection
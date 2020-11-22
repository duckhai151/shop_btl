@extends('frontEnd.layouts.master')
@section('title','Trang chủ')
@section('content')
    {{-- <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="home/img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth & Wood
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="home/img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="home/img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth $ Wood Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="home/img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- feature_part start-->
    <!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Trang chủ</h2>
              <p>Trang chủ <span></span> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Danh mục sản phẩm</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                @foreach ($categories as $category)
                    <div class="col-lg-6 col-sm-6">
                        <div class="single_feature_post_text">
                            <p>Chất lượng cao</p>
                            <h3>{{ $category->name }}</h3>
                            <a href="{{ url('category', $category->id) }}" class="feature_btn">XEM NGAY <i class="fas fa-play"></i></a>
                            <img  src="{{ url('images/categories', $category->img) }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

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
                                        <img  width="250px" height="300px" src="{{ url('images/products', $product->img) }}" alt="">
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

    <!-- subscribe_area part start-->
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Join Our Newsletter</h5>
                        <h2>Subscribe to get Updated
                            with new offers</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!-- subscribe_area part start-->
    <section class="client_logo padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="single_client_logo">
                        <img src="home/img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="home/img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="home/home/img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="home/img/client_logo/client_logo_4.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="home/img/client_logo/client_logo_5.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="home/img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="home/img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="home/img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="home/img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="home/img/client_logo/client_logo_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->
@endsection
@extends('frontEnd.layouts.master')
@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
                <h2>Liên hệ chúng tôi</h2>
                <p>Trang chủ <span>-</span> Liên hệ</p>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<section class="contact-section padding_top">
    <div class="container">
        <div class="row justify-content-center" style="margin-bottom: 50px;">
            <div class="col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.802681268171!2d105.76272551744383!3d21.04057980000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454c80375cd2b%3A0x18e9fe57d9cf3eb1!2zTuG7mWkgVGjhuqV0IFh1w6JuIEjDsmE!5e0!3m2!1svi!2s!4v1603461222906!5m2!1svi!2s" 
                width="1170" height="480" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                  <h3>Cầu Giấy, Hà Nội.</h3>
                  <p>Số 69, Hồ Tùng Mậu</p>
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                  <h3>+84 123 456 789</h3>
                  <p>Thứ 2 - Thứ 7 | 9h00 - 21h00</p>
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                  <h3>contact@furniture.com</h3>
                  <p>Gửi thắc mắc cho chúng tôi bất cứ lúc nào !</p>
                </div>
              </div>
            </div>
          </div>
        </div>  
    </div>
</section>
@endsection
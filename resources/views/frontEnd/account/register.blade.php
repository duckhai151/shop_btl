@extends('frontEnd.layouts.master')
@section('content')
 <!--================login_part Area =================-->
 <section class="login_part padding_top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h2 style="text-align: center; margin-bottom: 40px;">Đăng nhập</h2>
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="name" name="name" value=""
                                    placeholder="Tài khoản">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password" value=""
                                    placeholder="Mật khẩu">
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
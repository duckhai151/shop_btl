<footer class="footer_part">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-sm-6 col-lg-4">
                <div class="single_footer_part">
                    <h4>Liên hệ</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Địa chỉ: Số 69, Hồ Tùng Mậu, Hà Nội</a></li>
                        <li><a href="">SĐT: +84 123 456 789</a></li>
                        <li><a href="">Email: contact@furniture.com</a></li>
                    </ul>
                </div>
            </div> 
            <div class="col-sm-6 col-lg-4">
                <div class="single_footer_part">
                    <h4>Danh mục sản phẩm</h4>
                    <ul class="list-unstyled">
                        @foreach ($categories as $item)
                            <li><a href="">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="single_footer_part">
                    <h4>Theo dõi chúng tôi để xem những sản phẩm mới nhất</h4>
                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                    </p>
                </div>
            </div>
        </div>
        
    </div>
    <div class="copyright_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_icon social_icon">
                        <ul class="list-unstyled">
                            <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
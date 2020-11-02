<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ asset('home/img/logo.png')}}" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Trang Chủ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/product/index') }}">Sản phẩm</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Danh mục
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                    @foreach ($categories as $category)
                                        <a class="dropdown-item" href="{{ url('category', $category->id) }}">{{ $category->name }}</a> 
                                    @endforeach
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contact') }}">Liên Hệ</a>
                            </li>

                            @if (Auth::check())
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="{{ url('category') }}">Thông tin</a>
                                        <a class="dropdown-item" href="{{ url('logout') }}">Đăng xuất</a> 
                                    </div>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('login') }}">Đăng nhập</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('login') }}">Đăng kí</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex">
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>    
                        <div class="dropdown">
                            <a href="{{ url('cart') }}">
                                <i class="fas fa-cart-plus "></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
        <form class="d-flex justify-content-between search-inner" method="GET" action="{{ url('product/search') }}">
                <input type="text" class="form-control" id="key" name="key" placeholder="Nhập sản phẩm cần tìm ...">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
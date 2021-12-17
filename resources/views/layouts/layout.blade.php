<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Book store</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/frontend/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/frontend/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/responsive.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesoeet" href="{{asset('public/assets/frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">
</head>

<body>
<div class="banner_bg_main">
    <div class="logo_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo"><a href="."><img src="{{asset('public/assets/frontend/images/logo.png')}}"></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_section">
        <div class="container">
            <div class="containt_main">
                <div class="main">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="{{__('Tìm kiếm sách')}}">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="header_box">
                    <div class="login_menu">
                        <ul>
                            <li><a href="#">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="padding_10">{{__('Giỏ hàng')}}</span></a>
                            </li>
                            @guest
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <a href="{{route('login') }}">{{ __('Đăng nhập') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="padding_10 dropdown-toggle" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                            {{ __('Profile') }}
                                        </a>
                                        <a class="dropdown-item item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner bg main end -->
<!-- fashion section start -->
<div class="content_left">
    <p>Thể loại sách</p>
    @foreach($category as $item)
        <a href="#">{{$item}}</a>
    @endforeach
</div>

<div class="content_right">
    @yield('product')
</div>

<!-- fashion section end -->
<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="footer_logo"><a href="."><img src="{{asset('public/assets/frontend/images/footer-logo.png')}}"></a></div>
        <div class="location_main">{{__('Số diện thoại liên hệ: ')}}<a href="#">+84 946 794 778</a></div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html
                Templates</a></p>
    </div>
</div>

<!-- copyright section end -->
<!-- Javascript files-->
<script src="{{asset('public/assets/frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('public/assets/frontend/js/popper.min.js')}}"></script>
<script src="{{asset('public/assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/assets/frontend/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('public/assets/frontend/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('public/assets/frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('public/assets/frontend/js/custom.js')}}"></script>

</body>

</html>

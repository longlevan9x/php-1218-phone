<!DOCTYPE HTML>
<html>
<head>
    <title>Cửa Hàng sách</title>
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1"/>
    <meta name="viewport" content="width=device-width"/>
    <link href="{{asset('asset_admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('asset_admin/css/style1.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('asset_admin/css/bs.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('asset_admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('asset_admin/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('asset_admin/css/range-slider.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('asset_admin/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset_admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('asset_admin/js/lib.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset_admin/js/bxslider.js')}}"></script>
    <script src="{{asset('asset_admin/js/range-slider.js')}}"></script>
    <script src="{{asset('asset_admin/js/jquery.zoom.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset_admin/js/bookblock.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset_admin/js/custom.js')}}"></script>
    {{-- <script type="text/javascript" src="{{asset('asset_admin/social.js')}}js/"></script> --}}
    <script src="{{asset('asset_admin/js/formValidation.min1.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset_admin/js/formValidation.min2.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset_admin/js/index1.js')}}" type="text/javascript"></script>
    {{-- <script src="{{asset('asset_admin/js/jquery.bpopup.min.js')}}" type="text/javascript"></script> --}}
    <script type="text/javascript">
    $(document).ready(function() {
        // $('.social_active').hoverdir( {} );
        $('#ex1').zoom();
    });
    </script>
</head>
<body>
    <div class="wrapper">
        <header id="main-header">
            <section class="container-fluid container">
                <section class="row-fluid">
                    <section class="span4">
                        <h1 id="logo"> <a href="#"><img src="{{asset('asset_admin/images/logo.png')}}"/></a> </h1>
                    </section>
                    <section class="span8">
                        <ul class="top-nav2">
                            <li><a href="#">Giỏ hàng <i class="fa fa-shopping-cart" aria-hidden="true"></i><span style="color: red">&nbsp;&nbsp; 3 </span></a></li>

                            <li><a href="#">Đăng nhập</a></li>

                            <li><a href="#">Hello : You !</a></li>

                            <li><a href="#">Đăng kí</a></li>

                            <li><a href="#">Logout</a></li>
                        </ul>
                        <div class="col-xs-12 ">
                            <input class="col-md-6 col-xs-10" name="" type="text" style="" placeholder="Tìm kiếm" id="txtSearch" />
                            <button id="btnSearch" class="btn btn-info" type="submit" style="height: 35px;"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </section>
                </section>
            </section>
            <button id="menu1" style="font-size: 23px;background-color: #E5E5E5;height: 40px;line-height: 40px; width: 40px; text-align: center  " class="navbar-toggler pull-xs-right hidden-sm-up collapsed" type="button" data-toggle="collapse" data-target=".menu1" aria-expanded="false">
                ☰
            </button>
            <nav id="nav">
                <nav class="navbar menu1">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li> <a href="#">Trang chủ</a> </li>
                            <li> <a href="#">Giới thiệu</a></li>
                            <li><a href="#">Khuyến mãi</a></li>
                            <li><a href="#">Hỗ trợ khách hàng</a></li>
                            <li><a href="#">Liên hệ & Địa chỉ</a></li>
                        </ul>
                    </div>
                </nav>
            </nav>
        </header>
        <section id="content-holder" class="container-fluid container">
            <section class="row-fluid">
                
                <section class="span9 first">
                    <div class="blog-sec-slider">
                        <div class="slider5">
                            <div class="slide"><a ><img src="{{asset('asset_admin/images/banner3.jpg')}}" alt=""/></a></div>
                            <div class="slide"><a ><img src="{{asset('asset_admin/images/banner2.jpg')}}" alt=""/></a></div>
                            <div class="slide"><a ><img src="{{asset('asset_admin/images/banner1.jpg')}}" alt=""/></a></div>
                        </div>
                    </div>

                    <div id="right">
                        @yield('content')

                    </div>
                </section>

                <section class="span3">
                    <div class="side-holder">
                        <article class="banner-ad">
                            <img src="{{asset('asset_admin/images/khuyenmai.jpg')}}" alt=""/>
                        </article>
                    </div>
                    <div class="side-holder">
                        <article class="shop-by-list">
                            <h2>Danh mục sản phẩm</h2>
                            <div class="side-inner-holder">
                                <strong class="title">Thể loại</strong>
                                <ul class="side-list">
                                <li><a href="#">Văn Học</a></li>
                                <li><a href="#">Văn Học</a></li>
                                <li><a href="#">Văn Học</a></li>
                                <li><a href="#">Văn Học</a></li>
                                <li><a href="#">Văn Học</a></li>
                                <li><a href="#">Văn Học</a></li>
                                </ul>
                                <strong class="title">Giá</strong>
                                <ul class="side-list">
                                    <li><a href="#">Từ 10,000đ - 200,000đ</a></li>
                                    <li><a href="#">Từ 200,000đ - 500,000đ</a></li>
                                    <li><a href="#">Lớn hơn 500,000đ</a></li>
                                </ul>
                                <strong class="title">Tác giả</strong>
                                <ul class="side-list">
                                <li><a href="#">Tô Hoài</a></li>
                                <li><a href="#">Tô Hoài</a></li>
                                <li><a href="#">Tô Hoài</a></li>
                                <li><a href="#">Tô Hoài</a></li>
                                </ul>
                                <strong class="title">Nhà xuất bản</strong>
                                <ul class="side-list">
                                <li><a href="#">Giáo Dục</a></li>
                                <li><a href="#">Giáo Dục</a></li>
                                <li><a href="#">Giáo Dục</a></li>
                                <li><a href="#">Giáo Dục</a></li>
                                <li><a href="#">Giáo Dục</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="side-holder">
                        <article class="l-reviews">
                            <h2>Sách xem nhiều nhất</h2>
                            <div class="side-inner-holder">
                                <article class="r-post sach_xem_nhieu">
                                    <div class="r-img-title">
                                        <a href="#"><img src="{{asset('asset_admin\images\image18.jpg')}}"/></a>
                                        <div class="r-det-holder span6">
                                            <a href="#"><strong class="r-author"><b>Chí Phèo</b></strong></a>
                                        </div>
                                        <div class="r-det-holder span6">
                                            <span class="r-by">Tác giả:<a href="#">Nam Cao</a>
                                            </span>
                                            <span class="r-by">Thể loại:<a href="#">Văn Học</a>
                                            </span>
                                            <span class="r-by">Giá: 200,000 vnđ
                                            </span>
                                            <span class="r-by">Lượt xem: 350
                                            </span>
                                        </div>
                                    </div>
                                    <hr >
                                </article>
                            </div>
                        </article>
                    </div>
                </section>
            </section>
        </section>

        <section class="container-fluid footer-top2">
            <section class="social-ico-bar">
                <section class="container">
                    <section class="row-fluid">

                    </section>
                </section>
            </section>
            <section class="container">
                <section class="row-fluid">
                    <p><strong>Địa chỉ gửi hàng đổi/trả/bảo hành:</strong> Trung Tâm Xử Lý Đơn Hàng TIKI, Lô II-1, đường CN1, Khu Công Nghiệp Tân Bình, phường Tây Thạnh, Quận Tân Phú, TP. Hồ Chí Minh (Tham khảo <a href="" target="_blank">hướng dẫn đổi, trả, bảo hành</a> hoặc liên hệ 1900-6035 để được hướng dẫn trước khi gửi sản phẩm về Tiki)</p>
                    <p>Địa chỉ văn phòng: 52 Út Tịch, phường 4, quận Tân Bình, thành phố Hồ Chí Minh</p>
                    <p>Giấy chứng nhận Đăng ký Kinh doanh số 0309532909 do Sở Kế hoạch và Đầu tư Thành phố Hồ Chí Minh cấp ngày 06/01/2010</p>
                </section>
            </section>
        </section>
        <footer id="main-footer">
            <section class="social-ico-bar">
                <section class="container">
                    <section class="row-fluid">
                        <article class="span6">
                            <p>© 2016 - Bản quyền của developer [PHP]</p>
                        </article>
                        <article class="span6 copy-right">
                            <p><a href="?cn=home">Cửa hàng</a></p>
                        </article>
                    </section>
                </section>
            </section>
        </footer>
    </div>
</body>
</html>
@extends('index')    
@section('content')
    
        <section class="b-detail-holder">
            <article class="title-holder">
                <div class="span6">
                    <h2>{{$phone->name}}</h2>
                </div>
            </article>
            <div class="book-i-caption">
                <div class="span6 b-img-holder">
                    <span class='zoom' id='ex1'> <img src="{{asset('storage/phone/' . $phone->image)}}" height="219" width="300" id='jack' alt=''/></span>
                </div>
                <div class="span6">
                    <strong class="title">Tổng quan</strong>
                    <p class="text_chi_tiet">Nhà sản xuất: <a href="">{{isset($phone->producer) ? $phone->producer->name : "N/A"}}</a></p>
                    <p class="text_chi_tiet">Loại điện thoại: <a href="">{{isset($phone->kind_phone) ? $phone->kind_phone->name : "N/A"}}</a></p>
                    {{-- <p class="text_chi_tiet">Giá bìa: 120,000₫</p> --}}
                    <p class="text_chi_tiet">Giá bán: <span class="giamoi_chitiet">{{number_format($phone->price)}} ₫</span></p>
                    {{-- <p class="text_chi_tiet">Số trang: 300 trang</p> --}}
                    <div class="comm-nav">
                        <strong class="title2">Số lượng mua</strong>
                        <ul><form method="POST" action="">
                                <li><input name="txtSoLuong" class="txtSoLuong" type="text" value="1" required pattern="[0-9]{1,3}" title="Số lượng phải là số và nhỏ hơn 4 kí tự"/></li>
                            <li><input type="submit" value="Thêm vào giỏ hàng" class="more-btn"/></li>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            <section class="related-book">
                <div class="heading-bar">
                    <h2>Điện thoại liên quan</h2>
                    <span class="h-line"></span>
                </div>
                <div class="slider6">
            <style>
                .bx-clone {
                    display:none;
                }
            </style>
@forelse($related as $phone_relate)
<div class="slide">
    <a href=""><img src="{{asset('storage/phone/'. $phone_relate->image)}}" alt="" class="pro-img"/></a>
    <h4><a href="{{url('detail/' . str_slug($phone_relate->name) . "-" . $phone_relate->id)}}">{{$phone_relate->name}}</a></h4>
    <div class="cart-price">
        <a class="cart-btn2" href="?cn=giohang">Add to Cart</a>
        <span class="price">{{number_format($phone_relate->price)}} ₫</span>
    </div>
</div>
@empty
@endforelse
                    
                    
                </div>
            </section>
            <section class="reviews-section">
                <figure class="left-sec">
                    <div class="r-title-bar">
                        <strong>Hỏi, Đáp Về Sản Phẩm</strong>
                    </div>
                    <ul class="review-list">
                        <li>
                            <input name="" type="text" placeholder="Hãy đặt câu hỏi..."/>
                        </li>
                        <p>Các câu hỏi thường gặp về sản phẩm:</p>
                        <p>- Chế độ bảo hành cùng cách thức vận chuyển sản phẩm này thế nào?</p>
                        <p>- Kích thước sản phẩm này ?</p>
                        <p>- Sản phẩm này có dễ dùng không ?</p>
                        <p><span>Các câu hỏi liên quan đến sản phẩm hư hỏng, cần đổi trả, v.v ... vui lòng truy cập trang hỗ trợ</span></p>
                    </ul>
                    <a href="#" class="grey-btn">Gửi câu hỏi</a>
                </figure>
            </section>
        </section>
        <section>
            <div>
                <div class="fb-comments" data-width="100%" data-numposts="5"></div>
            </div>
        </section>
    
@endsection
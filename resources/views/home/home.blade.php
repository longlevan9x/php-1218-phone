@extends('index')
@section('content')
<h2>Sách mới</h2>
<section class="grid-holder features-books">
    @forelse($phones as $phone)
    <figure class="span4 slide first chinh1" style="position: relative;">
        <a href="{{url('detail/' . str_slug($phone->name) . "-" . $phone->id)}}"><img src="{{asset('storage/phone/' . $phone->image)}}" alt="" class="pro-img"/></a>
        <p>
            <span class="title">
                <a href="{{url('detail/' . str_slug($phone->name) . "-" . $phone->id)}}" style="font-weight: bold">{{$phone->name}}</a>
            </span>
        </p>
        <p>Loại điện thoại:
            @isset($phone->kind_phone)
            <a class="nxb" href="">{{$phone->kind_phone->name}}</a>
            @else
            N/A
            @endisset
        </p>
        <p>Nhà sản xuất:
            @if(isset($phone->producer))
            <a class="nxb" href="#">{{$phone->producer->name}}</a>
            @else
            N/A
            @endif
        </p>
        {{-- <p>
            <i class="fa fa-eye" aria-hidden="true"></i> Lượt xem:  12
        </p> --}}
        <div class="cart-price">
            <a class="cart-btn2" href="#">Thêm vào giỏ hàng</a>
            <span class="price">{{number_format($phone->price)}} đ</span>
        </div>
    </figure>
    @empty

    @endforelse
</section>
<div style="clear: both;"></div>
<section class="grid-holder features-books">
    {{$phones->links()}}
</section>
@endsection

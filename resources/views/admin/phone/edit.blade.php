@extends('admin.index')
@section('content')

<h3>Cập nhật điện thoại</h3>

@if($errors->any())
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif

<form action="{{route('phone.update', $phone->id)}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
	@method("PUT")
	@csrf

	<div class="form-group">
		<label>Tên</label>
		<input type="text" value="{{$phone->name}}" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Hình ảnh</label>
		<input type="file" name="image" class="form-control">
		<img src="{{asset('storage/phone/' . $phone->image)}}" width="150" alt="" />
	</div>
	<div class="form-group">
		<label>Số lượng</label>
		<input type="number" value="{{$phone->quantity}}" name="quantity" class="form-control">
	</div>
	<div class="form-group">
		<label>Giá</label>
		<input type="number" value="{{$phone->price}}" name="price" class="form-control">
	</div>
	<div class="form-group">
		<label>Loại</label>
		<select name="kind_phone_id">
			@foreach($kind_phones as $kind_phone)
<option {{$kind_phone->id == $phone->kind_phone_id ? "selected" : ''}} value="{{$kind_phone->id}}">{{$kind_phone->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Nhà sản xuất</label>
		<select name="producer_id">
			@foreach($producers as $producer)
				<option {{$producer->id == $phone->producer_id ? "selected" : ''}} value="{{$producer->id}}">{{$producer->name}}</option>
			@endforeach
		</select>
	</div>
	<button class="btn btn-success" type="submit">Tạo mới</button>
	<button class="btn btn-warning" type="reset">Nhập lại</button>
	<a href="{{route('phone.index')}}" class="btn btn-default">Trở lại</a>
</form>
@endsection
@extends('admin.index')
@section('content')

<h3>Tạo mới điện thoại</h3>

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

<form action="{{url('admin/phone')}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label>Tên</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Hình ảnh</label>
		<input type="file" name="image" class="form-control">
	</div>
	<div class="form-group">
		<label>Số lượng</label>
		<input type="number" name="quantity" class="form-control">
	</div>
	<div class="form-group">
		<label>Giá</label>
		<input type="number" name="price" class="form-control">
	</div>
	<div class="form-group">
		<label>Loại</label>
		<select name="kind_phone_id">
			@foreach($kind_phones as $kind_phone)
				<option value="{{$kind_phone->id}}">{{$kind_phone->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Nhà sản xuất</label>
		<select name="producer_id">
			@foreach($producers as $producer)
				<option value="{{$producer->id}}">{{$producer->name}}</option>
			@endforeach
		</select>
	</div>
	<button class="btn btn-success" type="submit">Tạo mới</button>
	<button class="btn btn-warning" type="reset">Nhập lại</button>
	<a href="{{route('phone.index')}}" class="btn btn-default">Trở lại</a>
</form>
@endsection
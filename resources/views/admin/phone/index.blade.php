@extends("admin.index")
@section('content')
	<a class="btn btn-primary" href="{{url('admin/phone/create')}}">Tạo mới điện thoại</a>
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>Tên</th>
			<th>Hình ảnh</th>
			<th>Giá</th>
			<th>Số lượng</th>
			<th>Loại</th>
			<th>Nhà sản xuất</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
		{{-- @if(isset($phones) && 	!empty($phones)) --}}
			{{-- @foreach() --}}
			{{-- @endforeach --}}
		{{-- @endif --}}
		@forelse($phones as $phone)
			<tr>
				<td>{{$phone->id}}</td>
				<td>{{$phone->name}}</td>
				<td>
					<img src="{{asset('storage/phone/' . $phone->image)}}" width="150" alt="" />
				</td>
				<td>{{number_format($phone->price)}}</td>
				<td>{{$phone->quantity}}</td>
				
				<td>{{isset($phone->producer) ? $phone->producer->name : ""}}</td>
				<td{{isset($phone->kind_phone) ? $phone->kind_phone->name : ""}}></td>
				<td>
					<a class="btn btn-success" href="{{route("phone.edit", $phone->id)}}">Chỉnh sửa</a>
				</td>
				<td>
					<button type="button" class="btn btn-danger deletePhone" data-url="{{route('phone.delete', $phone->id)}}">Xóa</button>
				</td>
			</tr>
		@empty
			<tr>
				<td colspan="7">Không có dữ liệu</td>
			</tr>
		@endforelse
	</table>
	
	<div class="col-md-12 text-center">
		{{$phones->links()}}		
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.deletePhone').click(function() {
				if(!confirm("Bạn có chắc chắn xóa?")) {
					return false;
				}


				let url = $(this).data('url');
				$.ajax({
					url: url,
					type: "POST",
					data: {
						"_token" : '{{csrf_token()}}', 
						"_method" : "DELETE"
					},
					success : function(result) {
						if(result.message == "success") {
							alert("Xóa thành công");
                           window.location.reload(true);
						}
						else {
							alert("Xóa thất bại");
						}
					},
					error: function(error) {
                        console.log(error);
					}

				});
			});
		});
	</script>
@endsection
@extends("index")
@section('content')
<div class="table-responsive">
	<h3>Danh sách giỏ hàng</h3>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>Hình ảnh</th>
				<th>Tên</th>
				<th>Giá</th>
				<th>Số lượng</th>
				<th>Thành tiền</th>
				<th>Cập nhật</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			<?php $total = 0; ?>
			@forelse($carts as $cart)
			<?php $total += $cart['qty'] * $cart['price'] ; ?>
			<tr>
				<td><img src="{{asset('storage/phone/' . $cart['image'])}}" alt="" style="width: 100px"></td>
				<td>{{$cart['name']}}</td>
				<td>{{number_format($cart['price'])}}</td>
				<td><input name="txtSoLuong" class="txtSoLuong" id="txtSoLuong" type="number" min="1" value="{{$cart['qty']}}" required pattern="[0-9]{1,3}" title="Số lượng phải là số và nhỏ hơn 4 kí tự"/></td>
				<td>{{number_format($cart['qty'] * $cart['price'])}}</td>
				<td>
					<button type="button" class="btn btn-success btnUpdateCart" data-id="{{$cart['id']}}"><i class="fa fa-refresh"></i></button>
				</td>
				<td>
					<button type="button" class="btn btn-danger btnDeleteCart" data-id="{{$cart['id']}}"><i class="fa fa-remove"></i></button>
				</td>
			</tr>
			@empty
			<tr>
				<td colspan="5">Không có sản phẩm</td>
			</tr>
			@endforelse
			<tr>
				<td>Tổng tiền: {{number_format($total)}}</td>
				<td>
					<a type="" class="btn btn-primary">Tiếp tục mua hàng</a>
				</td>
				<td>
					<a type="" class="btn btn-primary">Thanh toán</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$(".btnUpdateCart").click(function(e) {
			let qty = $(this).parent().parent().find("#txtSoLuong").val();
			let id = $(this).data('id');
			$.ajax({
				url: '{{url("cart/update")}}',
				type: "post",
				data: {id: id, qty: qty, _token: "{{csrf_token()}}"},
				success: function(result) {
					if(result.status == 1) {
						alert(result.message);
					}
					else {
						alert(result.message);
					}
				},
				error: function(error) {
					alert("Không cập nhật được");
				}
			});
		});

		$(".btnDeleteCart").click(function(e) {
			let id = $(this).data('id');
			if(confirm("Bạn chắc chắn xóa sản phẩm này?")) {
				$.ajax({
					url: '{{url("cart/remove")}}',
					type: "post",
					data: {id: id, _token: "{{csrf_token()}}"},
					success: function(result) {
						if(result.status == 1) {
							alert(result.message);
							window.location.reload(true);
						}
						else {
							alert(result.message);
						}
					},
					error: function(error) {
						alert("Không xóa được");
					}
				});
			}
		});
	});
		
</script>
@endsection

@extends('layouts.app-1')
@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">
			<input type="text" name="search" class="my_search float-right" id="search" placeholder="Search here">
		</div>
		<div class="card-body">
			<h2 style="text-align: center;"> Picked Bill List</h2>
			<br>
			<table class="table table-default">
				<thead>
					<tr>
						<th>#</th>
						<th>Bill No</th>
						<th>Shipper Name</th>
						<th>Shipper Address</th>
						<th>Shipper Number</th>
						<th>Reciever Name</th>
						<th>Reciever Address</th>
						<th>Reciever Number</th>
						<th>Total Amount</th>
						<th>Status</th>
						<th>Date</th>
						<th  colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					@if(isset($bills) && count($bills)>0)
					@foreach($bills as $bill)
					<tr>
						<td>{{$n++}}</td>
						<td>{{$bill->bill_no}}</td>
						<td>{{$bill->shipper_name}}</td>
						<td>{{$bill->shipper_address}}</td>
						<td>{{$bill->shipper_number}}</td>
						<td>{{$bill->reciever_name}}</td>
						<td>{{$bill->reciever_address}}</td>
						<td>{{$bill->reciever_number}}</td>
						<td>{{$bill->total}}</td>
						<td class="d-flex">
							<?php if ($bill->value == '0') { ?>
							<form action="{{route('bill.update',[$bill->id])}}" method="POST">
								{{ csrf_field() }}
								{{-- {{ method_field('PUT') }} --}}
								<button name="value" class="btn btn-outline-danger" type="submit" value="1" style="width: 85px;">Pending</button>
							</form>
							<?php }elseif ($bill->value == '1') { ?>
							<form action="{{route('bill.update',[$bill->id])}}" method="POST">
								{{ csrf_field() }}
								{{-- {{ method_field('PUT') }} --}}
								<button name="value" class="btn btn-outline-warning"  type="submit" value="2" style="width: 97px;">Picked Up</button>
							</form>
							<?php }elseif ($bill->value == '2') { ?>
							<form action="{{route('bill.update',[$bill->id])}}" method="POST">
								{{ csrf_field() }}
								{{-- {{ method_field('PUT') }} --}}
								<button name="value" class="btn btn-outline-primary"  type="submit" value="3" style="width: 85px;">Shipped</button>
							</form>
							<?php }else{ ?>
								<button  class="btn btn-success" style="width: 93px;" disabled>Delivered</button>
	
							<?php }?>
	
	
						  </td>
						<td>{{$bill->date}}</td>
						<td><a href="{{route('billprint', $bill->id)}}"><i class="fas fa-print"></i></a></td>
						<td>
							<form method="post"  action="{{route('trash')}}">
								{{csrf_field()}}
								<input type="hidden" name="id" value="{{$bill->id}}">
								<button type="submit"><i class="fas fa-trash"></i></button>
							</form>
						</td>
					</tr>
					@endforeach
					@else
					<tr>
						<td colspan="12"><center>Record Not Fond</center></td>
					</tr>
					@endif
				</tbody>
			</table>
		</div>
		<div class="card-footer">
				{{ $bills->links() }}
		</div>
	</div>
</div>

<style type="text/css">
	table{
		font-size: 14px;
	}
	.my_search{
	outline: none;
    border-top: none;
    border-left: none;
    border-right: none;
    }
</style>
@endsection
@section('script')
  <script type="text/javascript">
  	$(document).ready(function(){
         function fetch_data(query='')
         {
         	$.ajax({
         		 url:"{{route('live.search')}}",
         		 method:'get',
         		 data:{query1:query},
         		 dataType:'json',
         		 success:function(data)
         		 {
         		 	$('tbody').html(data.table_data);
         		 },
         		 error: function(e) {
                  console.log(e.responseText);
                 }

         	});
         }

    $(document).on('keyup', '#search', function(){
         var query=$(this).val();
         fetch_data(query);
    });
  	});
  </script>
@endsection
@extends('layouts.app-1')
@section('content')
<br>
<h2 style="text-align: center;">Recievers Information</h2>
<br>
<div class="container">
	<div class="card">
		<div class="card-header">
			<input type="text" name="search" class="my_search float-right" id="search" placeholder="Search here">
		</div>
		<div class="card-body">
			<table class="table table-default">
				<thead>
					<tr>
						{{-- <th>#</th> --}}
						
						<th>Reciever Name</th>
						<th>Reciever Address</th>
						<th>Reciever Number</th>
						
						{{-- <th>Date</th> --}}
						<th  colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					@if(isset($recievers) && count($recievers)>0)
					@foreach($recievers as $reciever)
					<tr>
						{{-- <td>{{$n++}}</td> --}}
						
						<td>{{$reciever->reciever_name}}</td>
						<td>{{$reciever->reciever_address}}</td>
						<td>{{$reciever->reciever_number}}</td>
						
						{{-- <td>{{$reciever->date}}</td> --}}
						<td><a href="{{route('reciever.edit',[$reciever->id])}}"><i class="fas fa-print"></i></a></td>
						<td>
							<form action="{{route('reciever.destroy',[$reciever->id])}}" method="POST" class="mr-1">
                                {{ method_field('DELETE') }}
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash">
                                    </i></button>
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
				{{ $recievers->links() }}
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
{{-- @section('script')
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
@endsection --}}
@extends('layouts.app-1')
@section('content')
<br>
<h2 style="text-align: center;">Shippers Information</h2>
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

                        <th>Shipper Name</th>
                        <th>Shipper Address</th>
                        <th>Shipper Number</th>

                        {{-- <th>Date</th> --}}
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($shippers) && count($shippers)>0)
                    @foreach($shippers as $shipper)
                    <tr>
                        {{-- <td>{{$n++}}</td> --}}

                        <td>{{$shipper->shipper_name}}</td>
                        <td>{{$shipper->shipper_address}}</td>
                        <td>{{$shipper->shipper_number}}</td>

                        {{-- <td>{{$shipper->date}}</td> --}}
                        <td><a href="{{route('shipper.edit',[$shipper->id])}}"><i class="fas fa-print"></i></a></td>
                        <td>
                            <form action="{{route('shipper.destroy',[$shipper->id])}}" method="POST" class="mr-1">
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
                        <td colspan="12">
                            <center>Record Not Fond</center>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $shippers->links() }}
        </div>
    </div>
</div>

<style type="text/css">
    table {
        font-size: 14px;
    }

    .my_search {
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
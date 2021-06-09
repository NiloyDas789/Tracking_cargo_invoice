<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal1">
      {{$bill->payment_value}}
</button>

    <!-- The Modal -->
    <div class="modal fade" id="myModal1">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Payment Status</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col-12 col-lg-6 offset-lg-3 offset-md-8 offset-md-2">
                <form action="{{route('bill.update3',[$bill->id])}}" method="POST">
                  {{ csrf_field() }}
                  
                    
                      <button class="btn btn-outline-primary" type="submit" value="Pending" name="payment_value">Pending</button>
                      <button class="btn btn-outline-primary"  type="submit" value="Paid" name="payment_value">Paid</button>
                      <button class="btn btn-outline-primary"  type="submit" value="Cancelled" style="    position: absolute;" name="payment_value">Cancelled</button>
                    
                </form>
                
                
                  

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
<div class="container">

    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1" style="position: absolute; z-index: 50;     margin-top: 515px; ">
      <i class="fas fa-plus"></i> Create Shipper
    </button>

    <!-- The Modal -->
    <div class="modal fade" id="myModal1">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Create Shipper</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col-12 col-lg-6 offset-lg-3 offset-md-8 offset-md-2">
                <form action="{{route('shipper.store')}}" method="POST">
                {!! csrf_field() !!}
                  <div class="card-body">
                    <div class="form-group">
                      <label for="shipper_name">
                        <h5>Name</h5>
                      </label>
                      <input type="name" name="shipper_name" class="form-control" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                      <label for="shipper_address">
                        <h5>Address</h5>
                      </label>
                      <input type="text" name="shipper_address" class="form-control" placeholder="Enter Address"
                        required>
                    </div>
                    <div class="form-group">
                      <label for="shipper_number">
                        <h5>Number</h5>
                      </label>
                      <input type="text" name="shipper_number" class="form-control" placeholder="Enter Number" required>
                    </div>







                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"  style="position: absolute; z-index: 60;     margin-left: 440px; margin-top: 515px;">
      <i class="fas fa-plus"></i> Create Reciever
    </button>

    <div class="modal fade" id="myModal2">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Create Reciever</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col-12 col-lg-6 offset-lg-3 offset-md-8 offset-md-2">
                <form action="{{route('reciever.store')}}" method="POST">
                {!! csrf_field() !!}
                  <div class="card-body">
                    <div class="form-group">
                      <label for="reciever_name">
                        <h5>Name</h5>
                      </label>
                      <input type="name" name="reciever_name" class="form-control" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                      <label for="reciever_address">
                        <h5>Address</h5>
                      </label>
                      <input type="text" name="reciever_address" class="form-control" placeholder="Enter Address"
                        required>
                    </div>
                    <div class="form-group">
                      <label for="reciever_number">
                        <h5>Number</h5>
                      </label>
                      <input type="text" name="reciever_number" class="form-control" placeholder="Enter Number"
                        required>
                    </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

  </div>
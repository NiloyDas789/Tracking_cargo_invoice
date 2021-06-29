@extends('layouts.app-1')
@section('content')

{{-- <style>
  /* The Modal (background) */
  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 90px;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
  }

  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 62%;
  }

  /* The Close Button */
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
  .mybtncolor {
    color: #fdfdfd;
    background-color: #b5b3b3;
    margin-top: 12px;
  }
</style> --}}

<div class="container">
  <span id="error"></span>
  <span id="sucess"></span>
  <br>


@include('mywork.modal')

  
  
  <br>




  <div style="position:relative;     z-index: 10;">
      <form id="my-form" class="my-form" action="#" method="post">
        <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
        <div class="card"  id="print" style="padding: 5px;">
          <div class="row" style="margin: 0px;">
    
            <div class="col"><img style="width: 350px; height: 150px" src="{{asset('logo.png')}}" alt="">
    
              <div>
                <span> Cargo and Excess bagagge specialist</span>
                <br>
                <span> web : www.jmgcargo.com</span>
              </div>
            </div>
            <div class="col">
              <h3 style="border-bottom: 1px solid;
              font-size: 16px;     background-image: linear-gradient(to right, rgb(21 2 123), rgb(255 0 0 / 0%));
    color: white; padding: 5px; margin-top: 10px;" >Head Office </h3>
              <span>8 fordham st,london,e1 1hs <br> phone: 0207 247 8878, 0207 247 7770</span>
              <h3 style="border-bottom: 1px solid;
              font-size: 16px;     background-image: linear-gradient(to right, rgb(21 2 123), rgb(255 0 0 / 0%));
    color: white; padding: 5px; margin-top: 10px;">Express & Collection Point </h3>
              <span>8 fordham st,london,e1 1hs <br> phone: 0207 247 8878, 0207 247 7770</span>
              <br><span>email: info@jmgcargo.com
              </span>
            </div>
            <div class="col">

              <img style="width: 160px; height: 210px; float: right;" src="{{asset('invoice.png')}}" alt="">
              
            </div>
    
    
          </div>
          <hr>
          <div class="row" style="margin: 0px;">
            <div class="col" style="width: 200px;">
              <div>
                <h4 style="     color: white;    background: #4472c4;    padding: 8px;
                text-align: center;
                ">Shipper </h4>
                {{-- <div>
                  <div class="form-group">
                    <label for="shipper">Select Shipper</label>
                    <select name="shipper" id="shipper" class="form-control" required>
                      <option value="" style="display:none" selected>Select Shipper</option>
                      @foreach($shippers as $r)
                      <option value="{{$r->id}}">{{$r->fname}}</option>
                @endforeach
                </select>
              </div>
            </div> --}}
            <div>
              <table>
                <tr>
                  <td>Number : </td>
                  <td><input type="text" class="form-control my-input" aria-label="Username" aria-describedby="basic-addon1"
                      name="shipper_input_number" id="shipper_input_number">
                  </td>
    
                </tr>
                <tr>
                  <td>Name : </td>
                  <td><input type="text" class="form-control my-input" aria-label="Username" aria-describedby="basic-addon1"
                      name="shipper_name" id="shipper_name">
                  </td>
    
                </tr>
                <tr>
                  <td>Address : </td>
                  <td><input type="text" class="form-control my-input" aria-label="Username" aria-describedby="basic-addon1"
                      name="shipper_address" id="shipper_address">
                  </td>
    
                </tr>
                <tr>
                  <td>Number : </td>
                  <td><input type="text" class="form-control my-input" aria-label="Username" aria-describedby="basic-addon1"
                      name="shipper_number" id="shipper_number">
                  </td>
    
                </tr>
    
              </table>
            </div>
    
    
          </div>
        </div>
        <div class="col" style="width: 200px;">
            <div>
              <h4 style="     color: white;    background: #4472c4;    padding: 8px;
                text-align: center;
                ">Shipped to
              </h4>
            <div>
    
              <div>
                <table>
                  <tr>
                    <td>Number : </td>
                    <td><input type="text" class="form-control my-input" aria-label="Username"
                        aria-describedby="basic-addon1" name="reciever_input_number" id="reciever_input_number">
                    </td>
    
                  </tr>
                  <tr>
                    <td>Name : </td>
                    <td><input type="text" class="form-control my-input" aria-label="Username"
                        aria-describedby="basic-addon1" name="reciever_name" id="reciever_name">
                    </td>
    
                  </tr>
                  <tr>
                    <td>Address : </td>
                    <td><input type="text" class="form-control my-input" aria-label="Username"
                        aria-describedby="basic-addon1" name="reciever_address" id="reciever_address">
                    </td>
    
                  </tr>
                  <tr>
                    <td>Number : </td>
                    <td><input type="text" class="form-control my-input" aria-label="Username"
                        aria-describedby="basic-addon1" name="reciever_number" id="reciever_number">
                    </td>
    
                  </tr>
    
                </table>
              </div>
              {{-- <table>
                    <tr>
                      <td>Address : </td>
                      <td><input type="text" class="form-control my-input" aria-label="Username"
                          aria-describedby="basic-addon1" name="shipped_to_address" 
                          id="shipped_to_address"></td>
    
                    </tr>
                    <tr>
                      <td>Number : </td>
                      <td><input type="text" class="form-control my-input" aria-label="Username"
                          aria-describedby="basic-addon1" name="shipped_to_number" 
                          id="shipped_to_number"></td>
    
                    </tr>
    
                  </table> --}}
            </div>
          </div>
        </div>
        <div class="col" style="width: 200px;">
          <div>
            <h2 style="    color: white;    background: #4472c4;    padding: 8px;
          text-align: center;
          ">Invoice</h2>
          </div>
          <div>
            <table>
              <tr>
                <td style= "    border: .5px solid #4472c4;" >Invoice Date : </td>
                <td style= "    border: .5px solid #4472c4;"><input type="text" name="date" id="my_date" readonly="readonly" @if($date_type==1)
                    value="{{$date_ne['y'].'-'.$date_ne['m'].'-'.$date_ne['d']}}" @endif @if($date_type==0)
                    value="{{date('m-d-Y')}}" @endif readonly="readonly" class="date"></label></td>

              </tr>
              
              <tr>
                <td style= "    border: .5px solid #4472c4;">Invoice NO : </td>
                <td style= "    border: .5px solid #4472c4;"><input type="text" name="bill_no" id="bill_no" readonly="readonly" value="{{$bill_no}}"
                    class="date"></label></td>

              </tr>
              <tr>
                <th colspan="2" style= "    border: .5px solid #4472c4;height: 94px;text-align: center; width:390px; background-color:#4472c430" >
                  Home Delivery
                </th>
              </tr>
            </table>
          </div>
    
        </div>
    
    </div>
    <div></div>
    
    
    {{-- <div class="card-header">
    
    
      <center><label style="font-size: 20px; font-weight: bold;">{{$shop_name}}</label></center>
    <center>{{$address}}</center>
    <label class="float-right" style="margin-right: 45px;">Contact No: {{$contact_no}}</label>
    
    
    <label style="margin-left: 10px;">Bill No: <input type="text" name="bill_no" id="bill_no" readonly="readonly"
        value="{{$bill_no}}" class="date"></label>
    <div class="row">
      <label style="margin-left: 21px;">@if($pan_no != '') Pan No: {{$pan_no}} @endif</label>
      <label style="margin-left: 43%;" id="my-label">Date: <input type="text" name="date" id="my_date" readonly="readonly"
          @if($date_type==1) value="{{$date_ne['y'].'-'.$date_ne['m'].'-'.$date_ne['d']}}" @endif @if($date_type==0)
          value="{{date('Y-m-d')}}" @endif readonly="readonly" class="date"></label>
    </div>
    
    
    
    <div class="row">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1" style="background-color: transparent;
                      outline: none;
                    border: none;">Name: </span>
          </div>
          <input type="text" class="form-control my-input" aria-label="Username" aria-describedby="basic-addon1"
            name="byer_name" id="byer_name">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1" style="background-color: transparent;
                      outline: none;
                    border: none;">Address: </span>
          </div>
          <input type="text" class="form-control my-input" aria-label="Username" aria-describedby="basic-addon1"
            name="byer_address" id="byer_address">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1" style="background-color: transparent;
                      outline: none;
                    border: none;">Number: </span>
          </div>
          <input type="text" class="form-control my-input" aria-label="Username" aria-describedby="basic-addon1"
            name="byer_number" id="byer_number">
        </div>
      </div>
    </div>
    </div> --}}
    
    <br>
    <br><br>
    <div class="card-body">
      <center>
        <table class="my-table" id="orders" style="    text-align: center; width: 1000px;">
          <thead>
            <tr style="border: 1px solid;">
              <th style="
                    height: 25px;
                    width: 70px;
                  ">S.N</th>
              <th>Particular</th>
              <th style=" height: 25px;
                    width: 100px;
                  ">Qty</th>
              <th style="
                    height: 25px;
                    width: 150px;
                  ">Rate(RS)</th>
              <th style="
                    height: 25px;
                    width: 150px;
                  ">Total(RS)</th>
              <th style="border:none; width: 1px;" id="add_th"><button class="btn btn-primary" id="add" type="button">+
                </button></th>
            </tr>
          </thead>
          <tbody id="my-table-body">
            <tr>
              <td><input type="number" name="serial_no[]" readonly="" id="serial_no1" class="SN" value="1"></td>
              <td><input type="text" name="particular[]" id="particular1" class="form-control particular"></td>
              <td><input class="form-control quantity" type='number' id='quantity_1' name='quantity[]' for="1" /></td>
              <td><input class="form-control product_price" type='number' data-type="product_price" id='product_price_1'
                  name='product_price[]' for="1" /></td> <!-- purchase_cost -->
              <td><input class="form-control total_cost" type='text' id='total_cost_1' name='total_cost[]' for='1'
                  readonly /></td>
              <td>
            </tr>
          </tbody>
          <tr style="border:1px solid;">
            <td colspan="4" style="text-align: right;">Total</td>
            <td style="border:1px solid !important"><input class="form-control subtotal" type='text' id='subtotal'
                name='subtotal' readonly /></td>
          </tr>
          <tr style="border: 1px solid;">
            <td colspan="5" style="border:1px solid !important">
              <div class="row">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" style="background-color: transparent;
                            outline: none;
                          border: none;">Amount in Latter: </span>
                  </div>
                  <input type="text" class="form-control my-input" aria-label="Username" aria-describedby="basic-addon1"
                    name="sum_amount" id="sum_amount" readonly="readonly" style="margin-right: 13px;">
                </div>
              </div>
            </td>
          </tr>
        </table>
      </center>
    </div>
    
    <br>

    <div class="row">
      <div class="container">
        <table  class="table table-bordered table-hover dataTable dtr-inline" style= "border: 1px solid #00000069">
          <tr>
            <th style="    width: 200px;" >Comments</th>
            <td style= "border: .5px solid #00000069"></td>
            
          </tr>
          <tr>
            <th style="    width: 200px;">Additional Details</th>
            
            <td style= "border: 1px solid #00000069"></td>
          </tr>
          
        </table>
      </div>
    </div>

    

    <div class="row">
      <div class="container">
        <table class="table table-bordered table-hover dataTable dtr-inline" style="    border-style: solid;
        border-width: thin;
        border-color: rgb(0 123 255 / 72%);">
          <thead style="    border-bottom-style: solid;
          border-bottom-color: rgb(0 123 255 / 72%);">
            <tr>
              
              <th scope="col">CUSTOMER SIGNATURE</th>
              <th scope="col">ACCOUNTS</th>
              <th scope="col">ROCKET CARGO</th>
            </tr>
          </thead>
          <tbody>
            <tr style="height: 100px;">
              
              <td></td>
              <td> <b> BANK TRANSFER</b></td>
              <td></td>
            </tr>
            
            
          </tbody>
        </table>
        
      </div>


    </div>
    <div class="card-footer">
      <div class="row">
        <img style="    width: 101%;height: 69px;" src="{{asset('footer.png')}}" alt="">
      </div>
    </div>
    </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-xl-3"></div>
      <div class="col-lg-3 col-md-3 col-xl-3"></div>
      <div class="col-lg-3 col-md-3 col-xl-3">
    
      </div>
      <div class="col-lg-3 col-md-3 col-xl-3" style="margin-top: 10px;">
        <button id="my-button" class="btn btn-primary float-right" type="button">Print</button>
        <div class="form-check float-right" style="margin-right: 12px;
              background-color: #0062cc;
              padding: 7px;
              padding-left: 24px;
              }">
          <label class="form-check-label">
            <input type="checkbox"  class="form-check-input" value="" id="check">Finish
          </label>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
<style type="text/css">
</style>
@endsection
@section('script')
<script>
  $(document).ready(function () {
    $('#check').on('click', function () {
      if ($(this).prop('checked') == true) {
        convertedVal = convertNumToWord(parseInt($('#subtotal').val()));
        $('#sum_amount').val(convertedVal);
      } else {
        $('#sum_amount').val("");
      }
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function () {
    $("#my-button").click(function () {
      var error = "";
      if ($('#shipper_name').val() == '') {
        error = "The shipper name field is empty";
        $('#error').html("<div class='alert alert-danger'>" + error + "</div>");
        return false;
        // alert("Name Field is empty");
      }
      if ($('#shipper_address').val() == '') {
        // alert("Address Field is empty");
        error = "The shipper address field is empty";
        $('#error').html("<div class='alert alert-danger'>" + error + "</div>");
        return false;
      }
      if ($('#shipper_number').val() == '') {
        error = "The shipper number name field is empty";
        $('#error').html("<div class='alert alert-danger'>" + error + "</div>");
        return false;
        // alert("Name Field is empty");
      }
      if ($('#reciever_name').val() == '') {
        // alert("Address Field is empty");
        error = "The reciever name field is empty";
        $('#error').html("<div class='alert alert-danger'>" + error + "</div>");
        return false;
      }
      if ($('#reciever_address').val() == '') {
        error = "The reciever address field is empty";
        $('#error').html("<div class='alert alert-danger'>" + error + "</div>");
        return false;
        // alert("Name Field is empty");
      }
      if ($('#reciever_number').val() == '') {
        // alert("Address Field is empty");
        error = "The reciever number field is empty";
        $('#error').html("<div class='alert alert-danger'>" + error + "</div>");
        return false;
      }
      $('.particular').each(function () {
        var count = 1;
        if ($(this).val() == '') {
          error = "Enter Particular at " + count + "Row";
          return false;
        }
        count = count + 1;
      });
      $('.quantity').each(function () {
        var count = 1;
        if ($(this).val() == '') {
          error = "Enter Quantity at " + count + "Row";
          $('#error').html("<div class='alert alert-danger'>" + error + "</div>");
          return false;
        }
        count = count + 1;
      });
      $('.product_price').each(function () {
        var count = 1;
        if ($(this).val() == '') {
          error = "Enter product price at " + count + "Row";
          return false;
        }
        count = count + 1;
      });
      if ($('#sum_amount').val() == '') {
        error = "Please click on clear";
        $('#error').html("<div class='alert alert-danger'>" + error + "</div>");
        return false;
      }
      if (error == '') {
        var form_data = $('#my-form').serialize();
        $.ajax({
          url: "{{route('bill.post')}}",
          method: "post",
          data: form_data,
          dataType: "json",
          success: function (data) {
            if (data == '200') {
              // alert('Sucessfully saved');
            }
          },
          error: function (e) {
            console.log(e.responseText);
          }
        });
      } else {
        $('#error').html("<div class='alert alert-danger'>" + error + "</div>");
        return false;
      }
      $('#add_th').remove();
      $('.btn_remove').remove();
      $('#my-label').css('margin-left', '63%');
      $("#print").printThis({
        debug: false, // show the iframe for debugging
        importCSS: true, // import parent page css
        importStyle: false, // import style tags
        printContainer: true, // print outer container/$.selector
        loadCSS: "{{asset('bootstrap/my.css')}}", // path to additional css file - use an array [] for multiple
        pageTitle: "", // add title to print page
        removeInline: false, // remove inline styles from print elements
        removeInlineSelector: "*", // custom selectors to filter inline styles. removeInline must be true
        printDelay: 333, // variable print delay
        header: null, // prefix to html
        footer: null, // postfix to html
        base: false, // preserve the BASE tag or accept a string for the URL
        formValues: true, // preserve input/form values
        canvas: false, // copy canvas content
        doctypeString: '...', // enter a different doctype for older markup
        removeScripts: false, // remove script tags from print content
        copyTagClasses: false, // copy classes from the html & body tag
        beforePrintEvent: null, // function for printEvent in iframe
        beforePrint: null, // function called before iframe is filled
        afterPrint: null // function called before iframe is removed
      });
      setTimeout(() => window.location.reload(), 5000);
    });
  });
</script>
<script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function () {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>

<script>
  $(function () {
    $('#shipper_input_number').autocomplete({
      source: function (request, response) {

        $.getJSON('{{url('/home/bill/shipper')}}?term=' + request.term, function (data) {
          var array = $.map(data, function (row) {
            return {
              value: row.shipper_number,
              label: row.shipper_number,
              shipper_name: row.shipper_name,
              shipper_address: row.shipper_address,
              shipper_number: row.shipper_number
            }
          })

          response($.ui.autocomplete.filter(array, request.term));
        })
      },
      minLength: 3,
      delay: 300,
      select: function (event, ui) {
        $('#shipper_name').val(ui.item.shipper_name)
        $('#shipper_address').val(ui.item.shipper_address)
        $('#shipper_number').val(ui.item.shipper_number)
      }
    })
  })
</script>
<script>
  $(function () {
    $('#reciever_input_number').autocomplete({
      source: function (request, response) {

        $.getJSON('{{url('/home/bill/reciever')}}?term=' + request.term, function (data) {
          var array = $.map(data, function (row) {
            return {
              value: row.reciever_number,
              label: row.reciever_number,
              reciever_name: row.reciever_name,
              reciever_address: row.reciever_address,
              reciever_number: row.reciever_number
            }
          })

          response($.ui.autocomplete.filter(array, request.term));
        })
      },
      minLength: 3,
      delay: 300,
      select: function (event, ui) {
        $('#reciever_name').val(ui.item.reciever_name)
        $('#reciever_address').val(ui.item.reciever_address)
        $('#reciever_number').val(ui.item.reciever_number)
      }
    })
  })
</script>

@endsection


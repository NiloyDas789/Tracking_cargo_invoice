<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav" style="    width: 239px;">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{route('home')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Home
                </a>
                <div class="sb-sidenav-menu-heading">Bill Managemt</div>
                <a class="nav-link" href="{{route('bill-index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Bill Generation
                </a>
                <a class="nav-link" href="{{route('bill.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    View Bill
                </a>
                {{-- <a class="nav-link" href="{{route('bill.pending')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-spinner"></i></div>
                    View Pending Bill
                </a>
                <a class="nav-link" href="{{route('bill.picked')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                    View Picked Up Bill
                </a>
                <a class="nav-link" href="{{route('bill.shipped')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-shipping-fast"></i></div>
                    View Shipped Bill
                </a>
                <a class="nav-link" href="{{route('bill.delivered')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-dolly"></i></div>
                    View Delivered Bill
                </a>
                 --}}
                {{-- <a class="nav-link" href="{{route('shipper.create')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Create Shipper
                </a> --}}
                





                <ul class="nav nav-pills nav-sidebar flex-column"  data-widget="treeview"    data-accordion="false">
           

                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="fas fa-dollar-sign"></i>
                          	&nbsp;&nbsp;
                          <p>
                            Payment Directories
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-left "></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{route('bill.paypending')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Pending</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('bill.paid')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Paid</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('bill.cancelled')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Cancelled</p>
                            </a>
                          </li>
                          
                          
                        </ul>
                      </li>








                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="fas fa-dolly"></i>
                          &nbsp;
                          <p>
                            Shipment Directories
                            &nbsp;&nbsp;&nbsp;<i class="fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{route('bill.pending')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Pending</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('bill.picked')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Picked Up</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('bill.shipped')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Shipped</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('bill.delivered')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Delivered</p>
                            </a>
                          </li>
                          
                        </ul>
                      </li>

                </ul>

                <a class="nav-link" href="{{route('shipper.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-truck-loading"></i></div>
                    Veiw Shipper Data
                </a>
                {{-- <a class="nav-link" href="{{route('reciever.create')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Create Reciever
                </a> --}}
                <a class="nav-link" href="{{route('reciever.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-receipt"></i></div>
                    Veiw Recievers Data
                </a>
                
            </div>
        </div>
    </nav>
</div>
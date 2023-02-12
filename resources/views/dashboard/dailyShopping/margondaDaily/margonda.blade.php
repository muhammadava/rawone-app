@extends('dashboard.master')

@section( 'content' )
    <div class="container">
      <div class="az-content-left az-content-left-components">
        <div class="component-item">
          <label>UI Elements</label>
          <nav class="nav flex-column">
            <a href="elem-buttons.html" class="nav-link">Buttons</a>
            <a href="elem-dropdown.html" class="nav-link">Dropdown</a>
            <a href="elem-icons.html" class="nav-link">Icons</a>
          </nav>
          <label>Forms</label>
          <nav class="nav flex-column">
            <a href="form-elements.html" class="nav-link">Form Elements</a>
          </nav>
          <label>Charts</label>
          <nav class="nav flex-column">
            <a href="chart-chartjs.html" class="nav-link">ChartJS</a>
          </nav>

          <label>Tables</label>
          <nav class="nav flex-column">
            <a href="table-basic.html" class="nav-link">Basic Tables</a>
          </nav>
        </div><!-- component-item -->

      </div><!-- az-content-left -->
      <div class="az-content-body pd-lg-l-40 d-flex flex-column">
        <div class="az-content-breadcrumb">
          <span>Components</span>
          <span>Forms</span>
          <span>Form Elements</span>
        </div>
        <h2 class="az-content-title">Data Margonda</h2>

        <div class="card b-20">
          <div class="card-header d-flex bd-highlight mb-3">
            <div class="wd-250">
              <div class="input-group p-2 bd-highlight">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                  </div>
                </div>
                <input type="text" value="January 20, 2019 09:00" id="datetimepicker3" class="form-control">
              </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary ml-auto bd-highlight" data-toggle="modal" data-target="#exampleModalCenter">
              <i class="typcn typcn-document-add"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Form Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="{{ route( 'margondaStore' ) }}" method="post">
                    @csrf
                    <div class="modal-body"><!-- start modal body -->

                      <div class="row"><!-- start row -->
                        
                        <div class="col-sm-4"><!-- start col -->
                          
                          <div class="mg-b-20">
                            <p class="mg-b-10 text-center">Pasar</p>
                            <select class="form-control select2-no-search" name="market_name">
                              <option label="Pilih satu"></option>
                              @foreach( $markets as $market )
                                <option value="{{ $market->id }}">{{ $market->market_name }}</option>
                              @endforeach
                            </select>
                          </div>
                            <input class="form-control mg-b-20" name="market_price" placeholder="Masukan harga" type="text">
                        </div><!-- end col -->
                        <div class="col-sm-4"><!-- start col -->

                          <div class="mg-b-20">
                            <p class="mg-b-10 text-center">Outlet</p>
                            <select class="form-control select2-no-search" name="outlet_name">
                              <option label="Pilih satu"></option>
                              @foreach( $outlets as $outlet )
                                <option value="{{ $outlet->id }}">{{ $outlet->outlet_name }}</option>
                              @endforeach
                            </select>
                          </div>
                            <input class="form-control mg-b-20" name="outlet_price" placeholder="Masukan harga" type="text">
                        </div><!-- end col -->
                        <div class="col-sm-4"><!-- start col -->

                          <div class="mg-b-20">
                            <p class="mg-b-10 text-center">Gudang</p>
                            <select class="form-control select2-no-search" name="warehouse_name">
                              <option label="Pilih satu"></option>
                              @foreach( $warehouses as $warehouse )
                                <option value="{{ $warehouse->id }}">{{ $warehouse->warehouse_name }}</option>
                              @endforeach
                            </select>
                          </div>
                            <input class="form-control mg-b-20" name="warehouse_price" placeholder="Masukan harga" type="text">
                        </div><!-- end col -->

                      </div><!-- end row -->
                      
                    </div><!-- end modal body -->
                    <div class="modal-footer">
                      <button type="reset" class="btn btn-warning" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">

              <div class="col-sm-4">
                <div class="table-responsive">
                  <table class="table table-hover mg-b-0">
                    <h2 align="center" class="mg-b-20">Pasar</h2>
                    <thead align="center">
                      <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                      </tr>
                    </thead>
                    @foreach( $join_markets as $market => $item )
                    <tbody align="center">
                      <tr>
                        <td>{{ $item->market_name }}</td>
                        <td>{{ $item->market_price }}</td>
                      </tr>
                    </tbody>
                    @endforeach
                      <tr>
                        <td>Total: Rp. {{ number_format($total) }}</td>
                      </tr>
                  </table>
                </div><!-- table-responsive -->
              </div>
              <div class="col-sm-4">
                <div class="table-responsive">
                  <table class="table table-hover mg-b-0">
                    <h2 align="center" class="mg-b-20">Outlet</h2>
                    <thead align="center">
                      <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                      </tr>
                    </thead>
                    @foreach( $join_outlets as $outlet => $item )
                    <tbody align="center">
                      <tr>
                        <td>{{ $item->outlet_name }}</td>
                        <td>{{ $item->outlet_price }}</td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div><!-- table-responsive -->
              </div>
              <div class="col-sm-4">
                <div class="table-responsive">
                  <table class="table table-hover mg-b-0">
                    <h2 align="center" class="mg-b-20">Gudang</h2>
                    <thead align="center">
                      <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                      </tr>
                    </thead>
                    @foreach( $join_warehouses as $warehouse => $item )
                    <tbody align="center">
                      <tr>
                        <td>{{ $item->warehouse_name }}</td>
                        <td>{{ $item->warehouse_price }}</td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div><!-- table-responsive -->
              </div>
            </div>

          </div><!-- end card body -->
        </div><!-- end card -->
      </div><!-- az-content-body -->
    </div><!-- container -->

@endsection
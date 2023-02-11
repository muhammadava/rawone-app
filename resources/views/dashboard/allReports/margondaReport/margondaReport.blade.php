@extends('dashboard.master')

@section( 'content' )
    <div class="container">
      <div class="az-content-body pd-lg-l-40 d-flex flex-column">
        <div class="az-content-breadcrumb">
          <span>Components</span>
          <span>Forms</span>
          <span>Form Elements</span>
        </div>
        <h2 class="az-content-title">Data Margonda</h2>

        <div class="card">
        <div class="card-header d-flex bd-highlight mb-3">
            <a href="{{ route( 'viewPDFMargonda' ) }}" class="btn btn-primary ml-auto bd-highlight">
                <i class="icon ion-ios-print"></i>
            </a>
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
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->market_price }}</td>
                      </tr>
                    </tbody>
                    @endforeach
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
                        <td>{{ $item->name }}</td>
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
                        <td>{{ $item->name }}</td>
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
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

              <div class="col-sm-12">
                <div class="table-responsive">
                  <table class="table table-hover mg-b-0">
                    <h2 align="center" class="mg-b-20">Penjualan</h2>
                    <thead align="center">
                      <tr>
                        <th>Tanggal</th>
                        <th>Bensin</th>
                        <th>Parkir</th>
                        <th>Nama Gs</th>
                        <th>Harga Gs</th>
                        <th>Nama Utility</th>
                        <th>Harga Utility</th>
                        <th>Nama Adm</th>
                        <th>Harga Adm</th>
                        <th>Lain-lain</th>
                        <th>Harga lain-lain</th>
                        <th>Total</th>
                        <th>MTD</th>
                      </tr>
                    </thead>
                    @foreach( $sales as $sale => $data )
                    <tbody align="center">
                      <tr>
                        <td>{{ $data->date }}</td>
                        <td>{{ $data->gas }}</td>
                        <td>{{ $data->parking }}</td>
                        <td>{{ $data->gs_id }}</td>
                        <td>{{ $data->gs_price }}</td>
                        <td>{{ $data->utility_id }}</td>
                        <td>{{ $data->utility_price }}</td>
                        <td>{{ $data->adm_id }}</td>
                        <td>{{ $data->adm_price }}</td>
                        <td>{{ $data->etc_id }}</td>
                        <td>{{ $data->etc_price }}</td>
                        <td>{{ $data->total }}</td>
                        <td>{{ $data->mtd }}</td>
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
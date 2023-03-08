@extends('dashboard.master')

@push( 'styles' )
  <style>
    .table-responsive {
      width: 1055px;
    }

    h2 {
      color: black;
    }

    li {
      display: inline-block;
    }
    li a {
      color: black
    }
  </style>  
@endpush

@section( 'content' )
    <div class="container">
      <div class="az-content-body pd-lg-l-40 d-flex flex-column">
        <div class="az-content-breadcrumb">
          <span>Components</span>
          <span>Forms</span>
          <span>Form Elements</span>
        </div>
        <h2 class="az-content-title">Data Margonda</h2>

        <ul>
          <li><a href="/dashboard/laporan-penjualan-margonda">Penjualan</a></li> |
          <li><a href="/dashboard/laporan-belanja-margonda">Belanja</a></li> |
          <li><a href="/dashboard/laporan-biaya-margonda">Biaya</a></li>
        </ul>

        <div class="card">
        <div class="card-header">
          <h1 class="d-flex justify-content-center">Penjualan</h1>
        </div>
          <div class="card-body">

                <div class="table-responsive">
                  <table class="table table-hover mg-b-0">
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
                          <td>{{ $data->extramargonda_date }}</td>
                          <td>{{ $data->gas }}</td>
                          <td>{{ $data->parking }}</td>
                          <td>{{ $data->gs_name }}</td>
                          <td>{{ $data->gs_price }}</td>
                          <td>{{ $data->utility_name }}</td>
                          <td>{{ $data->utility_price }}</td>
                          <td>{{ $data->adm_name }}</td>
                          <td>{{ $data->adm_price }}</td>
                          <td>{{ $data->etc_name }}</td>
                          <td>{{ $data->etc_price }}</td>
                          <td>{{ $data->total }}</td>
                          <td>{{ $post->tag ?? '' }}</td>
                        </tr>
                      </tbody>
                    @endforeach
                    <tr>
                      <td colspan="12" align="right">Rp. {{ number_format($totals) }}</td>
                      <td>sa</td>
                    </tr>
                  </table>
                </div><!-- table-responsive -->

          </div><!-- end card body -->
        </div><!-- end card -->
      </div><!-- az-content-body -->
    </div><!-- container -->

@endsection
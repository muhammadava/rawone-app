@extends('dashboard.master')

@push( 'styles' )
  <style>
    .table-responsive {
      overflow-x: scroll;
      width: 1055px;
    }

    h2 {
      color: black;
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

        <div class="card">
        <div class="card-header d-flex bd-highlight mb-3">
          <a href="" class="btn btn-primary bd-highlight">
            <i class="icon ion-ios-print"></i>
          </a>

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary ml-auto bd-highlight" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="typcn typcn-document-add"></i>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="" method="post">
                  @csrf
                  <div class="modal-body">

                    <div class="row">

                      <div class="col-sm-3">
                        <input class="form-control mb-2" placeholder="setor nilai" name="cash_deposit" type="text">
                        <input class="form-control" placeholder="cash" name="cash" type="text">
                      </div>
                      <div class="col-sm-3">
                        <input class="form-control mb-2" placeholder="edc" name="edc" type="text">
                        <input class="form-control" placeholder="goresto" name="goresto" type="text">
                      </div>
                      <div class="col-sm-3">
                        <input class="form-control mb-2" placeholder="gopay" name="gopay" type="text">
                        <input class="form-control" placeholder="grabfood" name="grabfood" type="text">
                      </div>
                      <div class="col-sm-3">
                        <input class="form-control mb-2" placeholder="ovo" name="ovo" type="text">
                        <input class="form-control" placeholder="shopeefood" name="shopeefood" type="text">
                      </div>
                      
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
          <div class="card-body">

                <div class="table-responsive">
                  <table class="table table-hover mg-b-0">
                    <thead align="center">
                      <tr>
                        <th colspan="21"><h2 align="center" class="mg-b-20">Penjualan</h2></th>
                      </tr>
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
                        <th>SETOR TUNAI</th>
                        <th>CASH</th>
                        <th>EDC</th>
                        <th>GORESTO</th>
                        <th>GOPAY</th>
                        <th>GRABFOOD</th>
                        <th>OVO</th>
                        <th>SHOPEEFOOD</th>
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

          </div><!-- end card body -->
        </div><!-- end card -->
      </div><!-- az-content-body -->
    </div><!-- container -->

@endsection
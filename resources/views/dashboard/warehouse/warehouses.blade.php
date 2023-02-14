@extends('dashboard.master')

@section( 'content' )
<div class="az-content-body pd-lg-l-40 d-flex flex-column">
    <div class="az-content-breadcrumb">
        <span>Penjualan</span>
        <span>Belanja</span>
        <span>Biaya</span>
    </div>
    <h2 class="az-content-title">Basic Tables</h2>
        
    <div class="row">
        <div class="col-sm-6">
            <div class="sheets mg-y-30" style="display: flex; align: items-center;">
                <span><a href="" style="color: black;">Penjualan</a></span>&nbsp;|&nbsp;
                <span><a href="" style="color: black;">Belanja</a></span>&nbsp;|&nbsp;
                <span><a href="" style="color: black;">Biaya</a></span>
            </div>
        </div>
        <div class="col-sm-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
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
                    <form action="{{ route( 'warehouses.store' ) }}" method="post">
                        @csrf
                        <div class="modal-body"> <!-- Start modal body -->
                        
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Tanggal</label>
                                    <input type="date" class="form-control" name="date">
                                    <label for="simatupang">Simatupang</label>
                                    <input class="form-control mg-b-20" id="simatupang" name="simatupang" placeholder="Ketikan total simatupang" type="text">
                                    <label for="margonda">Margonda</label>
                                    <input class="form-control mg-b-20" id="margonda" name="margonda" placeholder="Masukan total margonda" type="text">
                                </div>
                                <div class="col-sm-6">
                                    <label for="kelapa-gading">Kelapa Gading</label>
                                    <input class="form-control mg-b-20" id="kelapa-gading" name="kelapa_gading" placeholder="Masukan total kelapa gading" type="text">
                                    <label for="lainnya">Lain-lain</label>
                                    <input class="form-control mg-b-20" id="lainnya" name="etc" placeholder="Jika ada, ketikan" type="text">
                                    <label for="keterangan">Keterangan</label>
                                    <input class="form-control mg-b-20" id="keterangan" name="information" placeholder="Beri keterangan, jika ada" type="text">
                                </div>
                            </div>
                            <input class="form-control mg-b-20" id="keterangan" name="gross_sales" placeholder="" type="hidden">
                            <input class="form-control mg-b-20" id="keterangan" name="percent" placeholder="" type="hidden">
                        </div><!-- End modal body -->
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>  
    </div>
    
    <div class="table-responsive">
    <table class="table table-striped mg-b-0">
        <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>SIMATUPANG</th>
            <th>MARGONDA</th>
            <th>KELAPA GADING</th>
            <th>LAIN-LAIN</th>
            <th>KETERANGAN</th>
            <th>GROSS SALES</th>
            <th>PERCENT (%)</th>
        </tr>
        </thead>
        <tbody>
            <?php $nomor = 1 ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
            <?php $nomor++; ?>
        </tbody>
    </table>
    </div><!-- bd -->

@endsection
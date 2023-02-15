@extends('dashboard.master')

@section( 'content' )
<div class="az-content-body pd-lg-l-40 d-flex flex-column">

<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <form action="{{ route( 'warehouse.store' ) }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
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
                <input class="form-control mg-b-20" name="gross_sales" type="hidden">
                <input class="form-control mg-b-20" name="percent" type="hidden">
            </div><!-- End modal body -->
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>

</div>
@endsection
@extends('dashboard.master')

@section( 'content' )
<div class="az-content-body pd-lg-l-40 d-flex flex-column">
    <div class="az-content-breadcrumb">
        <span>Penjualan</span>
        <span>Belanja</span>
        <span>Biaya</span>
    </div>
    <h2 class="az-content-title">Basic Tables</h2>
    
        <div class="az-content-label mg-b-5">Striped Rows</div>
        <p class="mg-b-20">Add zebra-striping to any table row.</p>
        
        <button type="button" class="btn btn-primary ml-auto bd-highlight" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="typcn typcn-document-add"></i>
        </button>
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

    <hr class="mg-y-30">

@endsection
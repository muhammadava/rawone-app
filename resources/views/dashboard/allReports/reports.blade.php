@extends('dashboard.master')

@section( 'content' )
    <div class="container d-flex justify-content-center">
    
        <div class="row">
            <div class="col-sm-4">
                <a href="{{ route( 'margondareport' ) }}" class="text-dark">
                    <div class="card">
                        <div class="card-body">Laporan Margonda</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="" class="text-dark">
                    <div class="card">
                        <div class="card-body">Laporan Simatupang</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="" class="text-dark">
                    <div class="card">
                        <div class="card-body">Laporan Kelapa Gading</div>
                    </div>
                </a>
            </div>
        </div>

    </div><!-- container -->

@endsection
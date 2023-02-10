@extends('dashboard.master')
@push('styles')
<link href="{{ asset( '../lib/select2/css/select2.min.css' ) }}" rel="stylesheet">
<link href="{{ asset( '../lib/amazeui-datetimepicker/css/amazeui.datetimepicker.css' ) }}" rel="stylesheet">
<link href="{{ asset( '../lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.css' ) }}" rel="stylesheet">
<link href="{{ asset( '../lib/pickerjs/picker.min.css' ) }}" rel="stylesheet">   
@endpush

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
                            <select class="form-control select2-no-search" name="name">
                              <option label="Pilih satu"></option>
                              @foreach( $markets as $market )
                                <option value="{{ $market->id }}">{{ $market->name }}</option>
                              @endforeach
                            </select>
                          </div>
                            <input class="form-control mg-b-20" name="market_price" placeholder="Masukan harga" type="text">
                        </div><!-- end col -->
                        <div class="col-sm-4"><!-- start col -->

                          <div class="mg-b-20">
                            <p class="mg-b-10 text-center">Outlet</p>
                            <select class="form-control select2-no-search" name="name">
                              <option label="Pilih satu"></option>
                              @foreach( $outlets as $outlet )
                                <option value="{{ $outlet->id }}">{{ $outlet->name }}</option>
                              @endforeach
                            </select>
                          </div>
                            <input class="form-control mg-b-20" name="outlet_price" placeholder="Masukan harga" type="text">
                        </div><!-- end col -->
                        <div class="col-sm-4"><!-- start col -->

                          <div class="mg-b-20">
                            <p class="mg-b-10 text-center">Gudang</p>
                            <select class="form-control select2-no-search" name="name">
                              <option label="Pilih satu"></option>
                              @foreach( $warehouses as $warehouse )
                                <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
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

@push( 'scripts' )
    <script src="{{ asset( '../lib/jquery-ui/ui/widgets/datepicker.js' ) }}"></script>
    <script src="{{ asset( '../lib/bootstrap/js/bootstrap.bundle.min.js' ) }}"></script>
    <script src="{{ asset( '../lib/ionicons/ionicons.js' ) }}"></script>
    <script src="{{ asset( '../lib/jquery.maskedinput/jquery.maskedinput.js' ) }}"></script>
    <script src="{{ asset( '../lib/spectrum-colorpicker/spectrum.js' ) }}"></script>
    <script src="{{ asset( '../lib/select2/js/select2.min.js' ) }}"></script>
    <script src="{{ asset( '../lib/ion-rangeslider/js/ion.rangeSlider.min.js' ) }}"></script>
    <script src="{{ asset( '../lib/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js' ) }}"></script>
    <script src="{{ asset( '../lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.js' ) }}"></script>
    <script src="{{ asset( '../lib/pickerjs/picker.min.js' ) }}"></script>

    <script src="{{ asset( '../js/azia.js' ) }}"></script>
    <script>
        // Additional code for adding placeholder in search box of select2
        (function($) {
        var Defaults = $.fn.select2.amd.require('select2/defaults');

        $.extend(Defaults.defaults, {
            searchInputPlaceholder: ''
        });

        var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

        var _renderSearchDropdown = SearchDropdown.prototype.render;

        SearchDropdown.prototype.render = function(decorated) {

            // invoke parent method
            var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

            this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

            return $rendered;
        };

        })(window.jQuery);
    </script>
    <script>
        $(function(){
        'use strict'

        // Toggle Switches
        $('.az-toggle').on('click', function(){
            $(this).toggleClass('on');
        })

        // Input Masks
        $('#dateMask').mask('99/99/9999');
        $('#phoneMask').mask('(999) 999-9999');
        $('#phoneExtMask').mask('(999) 999-9999? ext 99999');
        $('#ssnMask').mask('999-99-9999');

        // Color picker
        $('#colorpicker').spectrum({
            color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
            color: 'rgba(23,162,184,0.5)',
            showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });

        // Datepicker
        $('.fc-datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            numberOfMonths: 2
        });

        // AmazeUI Datetimepicker
        $('#datetimepicker').datetimepicker({
            format: 'yyyy-mm-dd hh:ii',
            autoclose: true
        });

        // jQuery Simple DateTimePicker
        $('#datetimepicker2').appendDtpicker({
            closeOnSelected: true,
            onInit: function(handler) {
            var picker = handler.getPicker();
            $(picker).addClass('az-datetimepicker');
            }
        });

        new Picker(document.querySelector('#datetimepicker3'), {
            headers: true,
            format: 'MMMM DD, YYYY HH:mm',
            text: {
            title: 'Pick a Date and Time',
            year: 'Year',
            month: 'Month',
            day: 'Day',
            hour: 'Hour',
            minute: 'Minute'
            },
        });


        $(document).ready(function(){
            $('.select2').select2({
            placeholder: 'Choose one',
            searchInputPlaceholder: 'Search'
            });

            $('.select2-no-search').select2({
            minimumResultsForSearch: Infinity,
            placeholder: 'Choose one'
            });
        });

        $('.rangeslider1').ionRangeSlider();

        $('.rangeslider2').ionRangeSlider({
            min: 100,
            max: 1000,
            from: 550
        });

        $('.rangeslider3').ionRangeSlider({
            type: 'double',
            grid: true,
            min: 0,
            max: 1000,
            from: 200,
            to: 800,
            prefix: '$'
        });

        $('.rangeslider4').ionRangeSlider({
            type: 'double',
            grid: true,
            min: -1000,
            max: 1000,
            from: -500,
            to: 500,
            step: 250
        });

        });
    </script>
@endpush
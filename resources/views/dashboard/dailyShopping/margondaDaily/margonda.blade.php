@extends('dashboard.master')
@push('styles')
<link href="{{ asset( '../lib/spectrum-colorpicker/spectrum.css' ) }}" rel="stylesheet">
    <link href="{{ asset( '../lib/select2/css/select2.min.css' ) }}" rel="stylesheet">
    <link href="{{ asset( '../lib/ion-rangeslider/css/ion.rangeSlider.css' ) }}" rel="stylesheet">
    <link href="{{ asset( '../lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css' ) }}" rel="stylesheet">
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
        <h2 class="az-content-title">Data - data margonda</h2>

        <div class="card b-20">
            <div class="card-header">
                <div class="wd-250">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                        </div>
                      </div>
                      <input type="text" value="January 20, 2019 09:00" id="datetimepicker3" class="form-control">
                    </div>
                </div>
            </div>
            <div class="card-body">Hello, world</div>
        </div>

        <div class="az-content-label mg-b-5">Form Input &amp; Textarea</div>
        <p class="mg-b-20">A basic form control input and textarea with disabled and readonly mode.</p>

        <div class="row row-sm">
          <div class="col-lg">
            <input class="form-control" placeholder="Input box" type="text">
          </div><!-- col -->
          <div class="col-lg mg-t-10 mg-lg-t-0">
            <input class="form-control" placeholder="Input box (readonly)" readonly="" type="text">
          </div><!-- col -->
          <div class="col-lg mg-t-10 mg-lg-t-0">
            <input class="form-control" placeholder="Input box (disabled)" disabled="" type="text">
          </div><!-- col -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-lg">
            <textarea rows="3" class="form-control" placeholder="Textarea"></textarea>
          </div><!-- col -->
          <div class="col-lg mg-t-10 mg-lg-t-0">
            <textarea rows="3" class="form-control" placeholder="Textarea (readonly)" readonly></textarea>
          </div><!-- col -->
          <div class="col-lg mg-t-10 mg-lg-t-0">
            <textarea rows="3" class="form-control" placeholder="Texarea (disabled)" disabled></textarea>
          </div><!-- col -->
        </div><!-- row -->

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">Valid State Input</div>
        <p class="mg-b-20">A form control with success, warning and error state.</p>

        <form class="needs-validation was-validated">
          <div class="row row-sm">
            <div class="col-lg-4">
              <div class="form-group has-success mg-b-0">
                <input class="form-control" placeholder="Input box (success state)" value="This is input" required type="text">
                <textarea rows="3" class="form-control mg-t-20" placeholder="Textarea (success state)" required>This is textarea</textarea>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="form-group has-danger mg-b-0">
                <input class="form-control" placeholder="Input box (invalid state)" type="text" required>
                <textarea rows="3" class="form-control mg-t-20" placeholder="Textarea (invalid state)" required></textarea>
              </div><!-- form-group -->
            </div><!-- col -->
          </div><!-- row -->
        </form>

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">Custom Checkboxes &amp; Radios</div>
        <p class="mg-b-20">A custom styled checkboxes and radios.</p>

        <div class="row">
          <div class="col-lg-3">
            <label class="ckbox">
              <input type="checkbox"><span>Checkbox Unchecked</span>
            </label>
          </div><!-- col-3 -->
          <div class="col-lg-3 mg-t-20 mg-lg-t-0">
            <label class="ckbox">
              <input type="checkbox" checked><span>Checkbox Checked</span>
            </label>
          </div><!-- col-3 -->
          <div class="col-lg-3 mg-t-20 mg-lg-t-0">
            <label class="ckbox">
              <input type="checkbox" disabled><span>Checkbox Disabled</span>
            </label>
          </div><!-- col-3 -->
        </div><!-- row -->

        <div class="row mg-t-10">
          <div class="col-lg-3">
            <label class="rdiobox">
              <input name="rdio" type="radio">
              <span>Radio Unchecked</span>
            </label>
          </div><!-- col-3 -->
          <div class="col-lg-3 mg-t-20 mg-lg-t-0">
            <label class="rdiobox">
              <input name="rdio" type="radio" checked>
              <span>Radio Checked</span>
            </label>
          </div><!-- col-3 -->
          <div class="col-lg-3 mg-t-20 mg-lg-t-0">
            <label class="rdiobox">
              <input name="rdio" type="radio" disabled>
              <span>Radio Disabled</span>
            </label>
          </div><!-- col-3 -->
        </div><!-- row -->

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">File Browser</div>
        <p class="mg-b-20">A custom styled file browser.</p>

        <div class="row row-sm">
          <div class="col-sm-7 col-md-6 col-lg-4">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div><!-- col -->
        </div><!-- row -->

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">Toggle Switches</div>
        <p class="mg-b-20">A custom made toggles with jquery support.</p>

        <div class="az-toggle-group-demo">
          <div class="az-toggle"><span></span></div>
          <div class="az-toggle az-toggle-secondary"><span></span></div>
          <div class="az-toggle az-toggle-success"><span></span></div>
          <div class="az-toggle az-toggle-dark"><span></span></div>
        </div>

        <div class="az-toggle-group-demo mg-t-10">
          <div class="az-toggle on"><span></span></div>
          <div class="az-toggle az-toggle-secondary on"><span></span></div>
          <div class="az-toggle az-toggle-success on"><span></span></div>
          <div class="az-toggle az-toggle-dark on"><span></span></div>
        </div>

        <table class="table az-table-reference">
          <thead>
            <tr>
              <th class="wd-40p">Class Reference</th>
              <th class="wd-60p">Values</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code class="pd-0 bg-transparent">class="az-toggle az-toggle-[value]"</code></td>
              <td>secondary | success | dark</td>
            </tr>
          </tbody>
        </table>

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">Input Groups</div>
        <p class="mg-b-20">Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs.</p>

        <div class="row row-sm">
          <div class="col-lg-4">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div><!-- input-group -->
          </div><!-- col -->
          <div class="col-lg-4">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
              </div>
            </div>
          </div><!-- col -->
          <div class="col-lg-4">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">$</span>
              </div>
              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
              <div class="input-group-append">
                <span class="input-group-text">.00</span>
              </div>
            </div><!-- input-group -->
          </div><!-- col -->
        </div><!-- row -->

        <div class="row row-sm">
          <div class="col-lg-4">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <label class="ckbox wd-16 mg-b-0">
                    <input type="checkbox" class="mg-0"><span></span>
                  </label>
                </div>
              </div>
              <input type="text" class="form-control" placeholder="Text input with checkbox">
            </div><!-- input-group -->
          </div><!-- col-4 -->
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <label class="rdiobox wd-16 mg-b-0">
                    <input type="radio"><span></span>
                  </label>
                </div>
              </div>
              <input type="text" class="form-control" placeholder="Text input with radiobox">
            </div><!-- input-group -->
          </div><!-- col-4 -->
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div><!-- input-group -->
          </div><!-- col-4 -->
        </div><!-- row -->

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">Input Mask</div>
        <p class="mg-b-20">Input masks allows a user to more easily enter fixed width input where you would like them to enter the data in a certain format (dates,phones, etc).</p>

        <div class="row row-sm">
          <div class="col-lg-3">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  Date:
                </div>
              </div>
              <input id="dateMask" type="text" class="form-control" placeholder="MM/DD/YYYY">
            </div><!-- input-group -->
          </div><!-- col-4 -->
          <div class="col-lg-3 mg-t-20 mg-lg-t-0">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  Phone:
                </div>
              </div><!-- input-group-prepend -->
              <input id="phoneMask" type="text" class="form-control" placeholder="(000) 000-0000">
            </div><!-- input-group -->
          </div>
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  Phone + Ext.:
                </div>
              </div><!-- input-group-prepend -->
              <input id="phoneExtMask" type="text" class="form-control" placeholder="(000) 000-0000 ext 0000">
            </div><!-- input-group -->
          </div>
          <div class="col-lg-2 mg-t-20 mg-lg-t-0">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  SSN:
                </div><!-- input-group-text -->
              </div><!-- input-group-prepend -->
              <input id="ssnMask" type="text" class="form-control" placeholder="000-00-0000">
            </div>
          </div>
        </div><!-- row -->

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">Color Picker</div>
        <p class="mg-b-20">A simple component to select color in the same way you select color in Adobe Photoshop.</p>

        <div><input type="text" id="colorpicker"></div>

        <p class="mg-t-40 mg-b-10">You can allow alpha transparency selection. Check out these example.</p>
        <div><input type="text" id="showAlpha"></div>

        <p class="mg-t-40 mg-b-10">Show pallete only. If you'd like, spectrum can show the palettes you specify, and nothing else.</p>
        <div><input type="text" id="showPaletteOnly"></div>

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">jQuery UI Date Picker</div>
        <p class="mg-b-20">The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.</p>

        <div class="wd-200 mg-b-20">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
              </div>
            </div>
            <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">
          </div>
        </div><!-- wd-200 -->

        <p>Set the numberOfMonths option to an integer of 2 or more to show multiple months in a single datepicker.</p>

        <div class="wd-200 mg-b-20">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
              </div>
            </div>
            <input id="datepickerNoOfMonths" type="text" class="form-control" placeholder="MM/DD/YYYY">
          </div>
        </div><!-- wd-200 -->

        <p>Display the datepicker embedded in the page instead of in an overlay.</p>

        <div class="fc-datepicker"></div>

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">Datetimepicker</div>
        <p class="mg-b-20">Datetimepicker style variant on top of AmazeUI Datetimepicker.</p>

        <div class="wd-250 mg-b-20">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
              </div>
            </div>
            <input type="text" value="2018-12-20 21:05" id="datetimepicker" class="form-control">
          </div>
        </div>

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">Datetimepicker Style 2</div>
        <p class="mg-b-20">Datetimepicker style variant 2 by jquery-simple-datetimepicker</p>

        <div class="wd-250 mg-b-20">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
              </div>
            </div>
            <input type="text" value="2018-12-20 21:05" id="datetimepicker2" class="form-control">
          </div>
        </div>

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">Datetimepicker Style 3</div>
        <p class="mg-b-20">Datetimepicker style variant 3 by picker.js</p>

        <div class="wd-250 mg-b-20">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
              </div>
            </div>
            <input type="text" value="January 20, 2019 09:00" id="datetimepicker3" class="form-control">
          </div>
        </div>

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">Select<span class="tx-sserif">2</span> Box</div>
        <p class="mg-b-20">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>

        <div class="row row-sm mg-b-20">
          <div class="col-lg-4">
            <p class="mg-b-10">Single Select</p>
            <select class="form-control select2-no-search">
              <option label="Choose one"></option>
              <option value="Firefox">Firefox</option>
              <option value="Chrome">Chrome</option>
              <option value="Safari">Safari</option>
              <option value="Opera">Opera</option>
              <option value="Internet Explorer">Internet Explorer</option>
            </select>
          </div><!-- col-4 -->
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <p class="mg-b-10">Single Select with Search</p>
            <select class="form-control select2">
              <option label="Choose one"></option>
              <option value="Firefox">Firefox</option>
              <option value="Chrome">Chrome</option>
              <option value="Safari">Safari</option>
              <option value="Opera">Opera</option>
              <option value="Internet Explorer">Internet Explorer</option>
            </select>
          </div><!-- col-4 -->
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <p class="mg-b-10">Single Select (Disabled)</p>
            <select class="form-control select2" disabled>
              <option label="Choose one"></option>
              <option value="Firefox">Firefox</option>
              <option value="Chrome">Chrome</option>
              <option value="Safari">Safari</option>
              <option value="Opera">Opera</option>
              <option value="Internet Explorer">Internet Explorer</option>
            </select>
          </div><!-- col-4 -->
        </div><!-- row -->

        <div class="row row-sm mg-b-20">
          <div class="col-lg-4">
            <p class="mg-b-10">Multiple Select</p>
            <select class="form-control select2" multiple="multiple">
              <option value="Firefox">Firefox</option>
              <option value="Chrome">Chrome</option>
              <option value="Safari">Safari</option>
              <option value="Opera">Opera</option>
              <option value="Internet Explorer">Internet Explorer</option>
            </select>
          </div><!-- col -->
          <div class="col-lg-4">
            <p class="mg-b-10">Multiple Select with Pre-Filled Input</p>
            <select class="form-control select2" multiple="multiple">
              <option value="Firefox" selected>Firefox</option>
              <option value="Chrome">Chrome</option>
              <option value="Safari">Safari</option>
              <option value="Opera">Opera</option>
              <option value="Internet Explorer">Internet Explorer</option>
            </select>
          </div><!-- col -->
          <div class="col-lg-4">
            <p class="mg-b-10">Multiple Select (Disabled)</p>
            <select class="form-control select2-no-search" multiple="multiple" disabled>
              <option value="Firefox" selected>Firefox</option>
              <option value="Chrome">Chrome</option>
              <option value="Safari">Safari</option>
              <option value="Opera">Opera</option>
              <option value="Internet Explorer">Internet Explorer</option>
            </select>
          </div><!-- col -->
        </div><!-- row -->

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">Range Slider</div>
        <p class="mg-b-20">Easy, flexible and responsive range slider with skin support.</p>

        <div class="row row-sm">
          <div class="col-lg-6">
            <input type="text" class="rangeslider1" name="example_name" value="">
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <input type="text" class="rangeslider2" name="example_name" value="">
          </div><!-- col-6 -->
        </div><!-- row -->
        <div class="row row-sm mg-t-40">
          <div class="col-lg-6">
            <input type="text" class="rangeslider3" name="example_name" value="">
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <input type="text" class="rangeslider4" name="example_name" value="">
          </div><!-- col-6 -->
        </div><!-- row -->

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">Range Slider (Modern Skin)</div>
        <p class="mg-b-20">Below is the modern skin slider default.</p>

        <div class="row row-sm">
          <div class="col-lg-6">
            <input type="text" class="rangeslider1" name="example_name" data-extra-classes="irs-modern">
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <input type="text" class="rangeslider2" name="example_name" data-extra-classes="irs-modern">
          </div><!-- col-6 -->
        </div><!-- row -->
        <div class="row row-sm mg-t-40">
          <div class="col-lg-6">
            <input type="text" class="rangeslider3" name="example_name" data-extra-classes="irs-modern">
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <input type="text" class="rangeslider4" name="example_name" data-extra-classes="irs-modern">
          </div><!-- col-6 -->
        </div><!-- row -->

        <hr class="mg-y-30">

        <div class="az-content-label mg-b-5">Range Slider (Outline Skin)</div>
        <p class="mg-b-20">Below is the outline skin slider default.</p>

        <div class="row row-sm">
          <div class="col-lg-6">
            <input type="text" class="rangeslider1" name="example_name" data-extra-classes="irs-outline">
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <input type="text" class="rangeslider2" name="example_name" data-extra-classes="irs-outline">
          </div><!-- col-6 -->
        </div><!-- row -->
        <div class="row row-sm mg-t-40">
          <div class="col-lg-6">
            <input type="text" class="rangeslider3" name="example_name" data-extra-classes="irs-outline">
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <input type="text" class="rangeslider4" name="example_name" data-extra-classes="irs-outline">
          </div><!-- col-6 -->
        </div><!-- row -->

        <div class="ht-40"></div>

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
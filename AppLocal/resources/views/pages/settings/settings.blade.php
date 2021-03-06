@extends('layouts.app')

@section('links')
	{{-- Waves Effect Css --}}
	<link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />
	{{-- Animation Css --}}
	<link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />
    {{-- WaitMe Css --}}
    <link href="{{asset('plugins/waitme/waitMe.css')}}" rel="stylesheet" />
    {{-- JQuery DataTable Css --}}
    {{-- <link href="{{asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet"> --}}
	{{-- Custom Css --}}
	<link href="{{asset('css/settings/settings-style.css')}}" rel="stylesheet">
	{{-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes --}}
	<link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />
@endsection

@section('theme'){{ config('app.theme', 'theme-blue-grey') }}@endsection

@section('content')
<div class="card">
	<div class="row clearfix">
	    <div class="col-lg-6 col-md-6 col-sm-6">
	        <div class="new_message">
	            <div class="header">
	                <h2 style="color: #00bcd4;">
	                    Administrator Settings
	                </h2>
	            </div>
	            <div class="body">
	            	<div class="row">
	            		<div class="col-md-12">
	            			<p style="color: red;">
		            			* Activate System Operation During this months.
		            		</p>
	            		</div>
	            	</div>
	            	<div class="row">
	                	<div class="col-md-6">
		                	<label>Month</label>
		                	<select class="form-control">
		                		<option>January</option>
		                		<option>February</option>
		                		<option>March</option>
		                		<option>April</option>
		                		<option>May</option>
		                		<option>June</option>
		                		<option>July</option>
		                		<option>August</option>
		                		<option>September</option>
		                		<option>October</option>
		                		<option>November</option>
		                		<option>December</option>
		                	</select>
	                	</div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection

@section('scripts')
	{{-- Jquery Core Js --}}
	<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
	{{-- Bootstrap Core Js --}}
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
	{{-- Select Plugin Js --}}
	<!-- <script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script> -->
	{{-- Slimscroll Plugin Js --}}
	<script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	{{-- Waves Effect Plugin Js --}}
    <script src="{{asset('plugins/node-waves/waves.js')}}"></script>
    {{-- Wait Me Plugin Js --}}
    <script src="{{asset('plugins/waitme/waitMe.js')}}"></script>
    {{-- Sweet Alert Plugin Js --}}
    <script src="{{asset('plugins/sweetalert/sweetalert.min.js')}}"></script> 
    {{-- Jquery CountTo Plugin Js --}}
	<script src="{{asset('plugins/jquery-countto/jquery.countTo.js')}}"></script>
    {{-- Jquery DataTable Plugin Js --}}
    {{-- <script src="{{asset('plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script> --}}
	{{-- Sparkline Chart Plugin Js --}}
	<script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>
	{{-- Custom Js --}}
	<script src="{{asset('js/admin.js')}}"></script>
    <script src="{{asset('js/cdn/jquery/jquery.number.min.js')}}"></script>
    <script src="{{asset('js/pages/cards/colored.js')}}"></script>
    {{-- <script src="{{asset('js/pages/tables/jquery-datatable.js')}}"></script> --}}
	{{-- Demo Js --}}
	<script src="{{asset('js/demo.js')}}"></script>
@endsection
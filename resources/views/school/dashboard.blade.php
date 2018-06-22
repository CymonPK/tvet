@extends('layouts.app')
@section('content')
@push("scripts")
{!! Charts::scripts() !!}
{!! $chart->script() !!}
@endpush
@section('styles')
{!! Charts::styles() !!}
 @endsection
<section class="content">
  	<div class="container-fluid">
        <div class="row">
          	<div class="col-md-12">
          		<h2>Dashboard</h2>
                <div class="chart">
                   {!! $chart->html() !!}
                </div>
	        </div>
	    </div>
	</div>
</section>
@endsection
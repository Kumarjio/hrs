@extends('layouts.default')

	@section('breadcrumb')
		<ul class="breadcrumb">
		    <li><a href="/dashboard">{!! trans('messages.dashboard') !!}</a></li>
		    <li class="active">{!! trans('messages.job_application') !!}</li>
		</ul>
	@stop
	
	@section('content')
		<div class="row">
			@if(Entrust::can('manage_job_application'))
			<div class="col-sm-12 collapse" id="box-detail">
				<div class="box-info">
					<h2><strong>{!! trans('messages.add_new') !!}</strong> {!! trans('messages.job_application') !!}
					<div class="additional-btn">
						<button class="btn btn-sm btn-primary" data-toggle="collapse" data-target="#box-detail"><i class="fa fa-minus icon"></i> {!! trans('messages.hide') !!}</button>
					</div></h2>
					{!! Form::open(['route' => 'job-application.store','role' => 'form', 'class'=>'job-application-form','id' => 'job-application-form','data-form-table' => 'job_application_table']) !!}
						@include('job_application._form')
					{!! Form::close() !!}
				</div>
			</div>
			@endif

			<div class="col-sm-12">
				<div class="box-info full">
					<h2><strong>{!! trans('messages.list_all') !!}</strong> {!! trans('messages.job_application') !!}
					<div class="additional-btn">
						@if(Entrust::can('manage_job_application'))
						<a href="#" data-toggle="collapse" data-target="#box-detail"><button class="btn btn-sm btn-primary"><i class="fa fa-plus icon"></i> {!! trans('messages.add_new') !!}</button></a>
						@endif
					</div>
					</h2>
					@include('common.datatable',['col_heads' => $col_heads])
				</div>
			</div>
		</div>

	@stop
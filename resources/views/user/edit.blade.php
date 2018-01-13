@extends('layouts.app')

@section('title','Edit User | ')

@section('content')
					
<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Page Options</a></li>
				<li class="active">Page with Transparent Sidebar</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">... <small> ...</small></h1>
			<!-- end page-header -->
			
			<div class="row">
			<div class="col-md-12 m-b-5">		
		<div class="col-md-5">
			<h3 class="modal-title">Edit {{ $user->name }}</h3>
		</div>
		<div class="col-md-7 page-action text-right" >
			<a href="{{ route('users.index') }}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Back</a>
		</div>
	</div>
			    <div class="col-md-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Panel Title here</h4>
                        </div>
                        <div class="panel-body">
						{!! Form::model($user,['method'=>'PUT','route'=>['users.update',$user->id]]) !!}
		            		@include('user._form')
		                	{!! Form::submit('Update',['class' => 'btn btn-primary']) !!}
		             	{!! Form::close() !!}
					</div>
                    </div>
			    </div>
			</div>
@endsection
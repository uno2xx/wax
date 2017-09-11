@extends('layouts.master')

@section('content')
	<div class="">
	 <div class="row">
		  <div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="x_panel">
		      <div class="x_title">
		        <h2>Update Profile {{-- <small>different form elements</small> --}}</h2>
		        {{-- <ul class="nav navbar-right panel_toolbox">
		          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
		          </li>
		          <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
		            <ul class="dropdown-menu" role="menu">
		              <li><a href="#">Settings 1</a>
		              </li>
		              <li><a href="#">Settings 2</a>
		              </li>
		            </ul>
		          </li>
		          <li><a class="close-link"><i class="fa fa-close"></i></a>
		          </li>
		        </ul> --}}
		        <div class="clearfix"></div>
		      </div>
		      <div class="x_content">
		        <br />
		        {!! Form::model($user ,['route' => ['profileUpdate', $user->id], 'method'=>'put', 'class'=>'form-horizontal form-label-left']) !!}
		        	@include('users.form')
		        {!! Form::close() !!}
		      </div>
		    </div>
		  </div>
		</div>
	</div>
@endsection
@extends('layouts.master')

@section('content')
	<div class="">
	 <div class="row">
		  <div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="x_panel">
		      <div class="x_title">
		        <h2>Settings {{-- <small>different form elements</small> --}}</h2>
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
		        {{Form::open(['route'=>'settingsUpdate', 'method'=>'put', 'class'=>'form-horizontal form-label-left'])}}
		        	@foreach($settings as $setting)
		        		<div class="item form-group {{$errors->has('email') ? 'bad':''}}">
						  {{ Form::label('email',$setting->settings_name, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])}}
						  <div class="col-md-6 col-sm-6 col-xs-12">
						    {{ Form::text('setting_'.$setting->id, $setting->settings_value, ['class'=>'form-control']) }}
						    <span class="fa fa-percent form-control-feedback right" aria-hidden="true"></span>
						  </div>
						  <div class="alert">{{$errors->first('email')}}</div>
						</div>
		        	@endforeach
		        	<div class="form-group">
					  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					    {!! Form::submit('Update Settings', ['class' => 'btn btn-primary']) !!}
					  </div>
					</div>
		        {!! Form::close() !!}
		      </div>
		    </div>
		  </div>
		</div>
	</div>
@endsection
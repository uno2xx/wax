<div class="item form-group {{$errors->has('name') ? 'bad':''}}">
  {{ Form::label('name', __('Name'), ['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])}}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {{ Form::text('name', null, ['class'=>'form-control']) }}
  </div>
  <div class="alert">{{$errors->first('name')}}</div>
</div>

<div class="item form-group {{$errors->has('email') ? 'bad':''}}">
  {{ Form::label('email', __('Email'), ['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])}}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {{ Form::text('email', null, ['class'=>'form-control']) }}
  </div>
  <div class="alert">{{$errors->first('email')}}</div>
</div>

<div class="item form-group {{$errors->has('address') ? 'bad':''}}">
  {{ Form::label('address', __('Address'), ['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])}}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {{ Form::text('address', null, ['class'=>'form-control']) }}
  </div>
  <div class="alert">{{$errors->first('address')}}</div>
</div>

<div class="ln_solid"></div>

<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    {!! Form::submit('Update My Profile', ['class' => 'btn btn-primary']) !!}
  </div>
</div>
@extends('layouts.login')

@section('content')
<div>
  <a class="hiddenanchor" id="signup"></a>
  <a class="hiddenanchor" id="signin"></a>

  <div class="login_wrapper">
    <div id="register" class="animate form">
      <section class="login_content">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
          <h1>Create Account</h1>
          <div>
            <input type="text" class="form-control" placeholder="Name" required="" name="name" />
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div>
            <input type="email" class="form-control" placeholder="Email" required="" name="email" />
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div>
            <input type="password" class="form-control" placeholder="Password" required="" name="password" />
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div>
            <input type="password" class="form-control" placeholder="Confirm Password" required="" name="password_confirmation" />
          </div>
          <div>
            <button type="submit" class="btn btn-default submit">Register</button>
          </div>

          <div class="clearfix"></div>

          <div class="separator">
            <p class="change_link">Already a member ?
              <a href="#signin" class="to_register"> Log in </a>
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
              <h1><i class="fa fa-paw"></i> Affiliate System!</h1>
              <p>©2016 All Rights Reserved. Waxwarmups.com.au. Privacy and Terms</p>
            </div>
          </div>
        </form>
      </section>
    </div>
  </div>
</div>
@endsection
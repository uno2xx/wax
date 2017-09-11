@role('admin')
<ul class="nav side-menu">
  <li><a href="{{ route('dashboard') }}"> <i class="fa fa-home"></i> Home{{--  <span class="fa fa-chevron-down"></span> --}}</a>
  </li>
  <li><a><i class="fa fa-edit"></i> Consultants{{--  <span class="fa fa-chevron-down"></span> --}}</a>
  </li>
  <li><a><i class="fa fa-credit-card-alt"></i> Sales{{--  <span class="fa fa-chevron-down"></span> --}}</a>
  </li>
  <li><a><i class="fa fa-table"></i> Payouts{{--  <span class="fa fa-chevron-down"></span> --}}</a>
  </li>
  <li><a><i class="fa fa-bar-chart-o"></i> Network{{--  <span class="fa fa-chevron-down"></span> --}}</a></li>
  <li><a href="{{ route('settings') }}"><i class="fa fa-cog"></i> Settings{{--  <span class="fa fa-chevron-down"></span> --}}</a></li>
  <li><a href="{{ route('profileShow', auth()->user()->id) }}"><i class="fa fa-user"></i>Profile{{--  <span class="fa fa-chevron-down"></span> --}}</a>
  </li>
  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout{{--  <span class="fa fa-chevron-down"></span> --}}</a>
  </li>
</ul>
@endrole

@role('user')
<ul class="nav side-menu">
  <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Home{{--  <span class="fa fa-chevron-down"></span> --}}</a>
  </li>
  <li><a><i class="fa fa-edit"></i> Sales{{--  <span class="fa fa-chevron-down"></span> --}}</a>
  </li>
  <li><a><i class="fa fa-desktop"></i> Earnings{{--  <span class="fa fa-chevron-down"></span> --}}</a>
  </li>
  <li><a><i class="fa fa-bar-chart-o"></i> Referrals{{--  <span class="fa fa-chevron-down"></span> --}}</a>
  </li>
  <li><a href="{{ route('profileShow', auth()->user()->id) }}"><i class="fa fa-user"></i>Profile{{--  <span class="fa fa-chevron-down"></span> --}}</a>
  </li>
  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout{{--  <span class="fa fa-chevron-down"></span> --}}</a>
  </li>
</ul>
@endrole

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ONLINE MATATU SACCO SYSTEM</title>

<link href="{{asset('css/main.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="#">Online Matatu</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav navbar-left">
              <li><a href="{{route('member.index')}}" style="background-color:transparent;color:#FFF;font-size:20px; font-weight:13px;"><strong>	ONLINE MATATU SACCO SYSTEM</strong></a></li>
            </ul>
            <ul class="top-nav">

              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg fa-fw "></i>{{Sentinel::getUser()->name}}</a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href=""><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="{{ url('/signout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" ><i class="fa fa-power-off fa-lg"></i> Logout</a>
          <form id="logout-form" action="{{ url('/signout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                             </form>
                                                 </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">

          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active">
              <a href="{{url('/member')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li><a href="{{url('/member/loan-applications')}}"><i  class="fa fa-pencil-square-o"></i><span>My Loan Applications</span></a>
            </li>
              <li><a href="{{url('/member/guarantor-requests')}}"><i  class="fa fa-hand-grab-o"></i><span>My Guarantor requests</span></a>
              </li>
              <li><a href="{{url('/member/loans')}}"><i  class="fa fa-money"></i><span>My Loans</span></a>
            </li>

          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>@yield('page_name')</h1>
          </div>
        </div>
      @yield('content')
      </div><!--end content-wrapper-->
    </div><!--end wrapper-->
    <!-- Javascripts-->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/plugins/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/plugins/select2.min.js')}}"></script>
<script src="{{asset('js/plugins/bootstrap-datepicker.min.js')}}"></script>
   <script type="text/javascript">
      $('#demoDate').datepicker({
        format: "dd/mm/yyyy",
        autoclose: true,
        todayHighlight: true
      });
       $('#demoSelect').select2();
  </script>
@yield('scripts')
  </body>
</html>

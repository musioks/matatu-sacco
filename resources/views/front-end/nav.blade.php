<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">ONLINE MATATU SACCO SYSTEM</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{request()->is('/') ? 'active' : ''}}"><a href="{{url('/')}}">Home</a></li>
                @if($user = Sentinel::check())
                <li><a href="{{url('/my-bookings')}}">My Bookings</a></li>
                    @else
                    <li class="{{request()->is('complains') ? 'active' : ''}}"><a href="{{ url('/complains') }}">Complains</a></li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if($user = Sentinel::check())
                    <li><a href="#"> {{$user->name ?? ''}}</a>
                    </li>
                    <li><a href="{{ url('/signout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i
                                class="fa fa-sign-out "></i> Logout</a>
                        <form id="logout-form" action="{{ url('/signout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                <li><a href="{{url('/register')}}" style="font-weight: bold;"><i class="fa fa-edit"></i> Create Member Account</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

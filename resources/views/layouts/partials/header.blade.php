  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{ url('/') }}" class="navbar-brand"><b>{{ site_name() }}</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{ Ekko::isActiveRoute('home') }}"><a href="{{ route('home') }}">Home</a></li>
                @if (Auth::user())
            <li class="{{ Ekko::areActiveRoutes(['tickets.index', 'tickets.show']) }}"><a href="{{ route('tickets.index') }}">My tickets</a></li>
            <li class="{{ Ekko::isActiveRoute('tickets.create') }}"><a href="{{ route('tickets.create') }}">Open new ticket</a></li>
                @endif
            <li class="{{ request()->path() == "contact" ? 'active' : 'n' }}"><a href="{{ route('contact') }}">Contact</a></li>
                @permission('view-backend')
            <li><a href="{{ route('admin.dashboard') }}"> Admin</a></li>
                @endpermission              
          </ul>

        </div>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
             @if (Auth::guest())
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ request()->path() == "login" ? 'active' : 'n' }}"><a href="{{ route('auth.login') }}">Login</a></li>
                <li class="{{ request()->path() == "signup" ? 'active' : 'n' }}"><a href="{{ route('auth.register') }}">Create Account</a></li>
            </ul>
            @else  

            <li class="dropdown user user-menu {{ Ekko::isActiveRoute('account.dashboard') }}">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ Auth::user()->getAvatarUrl() }}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ Auth::user()->fullname }}</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="{{ Auth::user()->getAvatarUrl() }}" class="img-circle" alt="User Image">

                  <p>
                    {{ Auth::user()->fullname }}
                    <small>Member since {{ Auth::user()->created_at->format('l jS \\of F Y') }}</small>
                  </p>
                  
                </li>

                <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('account.dashboard') }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
                </li>
              </ul>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </header>
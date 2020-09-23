<nav class="main-header navbar navbar-expand-md navbar-light navbar-yellow">

  <div class="container">
    
    <a href="/" class="navbar-brand">
      <img src="img/list.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>MyList</strong></span>
    </a>

    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      @if (Auth::guest())
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><strong>Masuk</strong></a></li>
        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link"><strong>Daftar</strong></a></li>
      @else
        <li class="nav-item">
            <a class="nav-link">
                <strong> Halo, {{ Auth::user()->name }} </strong>
            </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
          </form>
        </li>
        
      @endif
    </ul>

  </div>

</nav>
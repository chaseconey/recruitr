<html>
<head>
    <title>Recruitr</title>
    <link rel="stylesheet" href="/css/foundation.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

 <nav class="top-bar">
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <h1><a href="/">Recruitr</a></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="divider"></li>
        <li>{{ link_to('/', 'Home') }}</li>
        <li class="divider"></li>
        <li>{{ link_to_route('applications.create', 'Apply') }}</li>
        <li class="divider"></li>

        @if($user->admin)
        <li>{{ link_to_route('admin.index', 'Admin') }}</li>
        <li class="divider"></li>
        @endif

        <li class="has-dropdown">
          @if( isset($user) && $user->email )
          <a href="#">{{ $user->email }}</a>
          <ul class="dropdown">
            <li>{{ link_to('user/logout', 'Logout') }}</li>
          </ul>
          @else
          <a href="#">Guest</a>
          <ul class="dropdown">
            <li>{{ link_to('user/login', 'Login') }}</li>
            <li>{{ link_to('user/create', 'Register') }}</li>
          </ul>
          @endif
        </li>
      </ul>
    </section>
  </nav>

  <!-- End Top Bar -->
  <div class="container">

    @if (Session::has('message'))
    <div data-alert class="alert-box">
      <a href="#" class="close">&times;</a>
      {{ Session::get('message') }}
    </div>
    @endif

    @yield('content')

  </div>


  <!-- Footer -->

  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; Copyright Epicom 2013.</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="http://www.epicom.com/" target="_blank">Main Site</a></li>
            <li><a href="http://www.epicom.com/about/our-company" target="_blank">About Epicom</a></li>
            <li><a href="http://www.epicom.com/blog" target="_blank">Blog</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- End Footer -->

  <script src="/js/jquery.min.js"></script>
  <script src="/js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>

</body>
</html>
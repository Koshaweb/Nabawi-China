
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      @if (Auth()->user()->type == 'admin')
      <li class="nav-item d-none d-sm-inline-block">
        <a href="vieworder" class="nav-link">Orders</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="msgs" class="nav-link">Messages</a>
      </li>

      @endif
    </ul>

    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

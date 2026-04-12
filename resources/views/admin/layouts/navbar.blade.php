<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#">
        <i class="fas fa-bars"></i>
      </a>
    </li>

    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ route('admin.dashboard') }}" class="nav-link">Dashboard</a>
    </li>

    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ route('welcome') }}" class="nav-link" title="Visit Website">
        <i class="fas fa-globe"></i>
      </a>
    </li>

    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link text-danger" title="Clear Cache">
        <i class="fas fa-trash"></i>
      </a>
    </li>
  </ul>

  <!-- SEARCH FORM (hide on mobile) -->
  <form class="form-inline ml-3 d-none d-md-flex">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar -->
  <ul class="navbar-nav ml-auto align-items-center">

    <!-- Factory (only desktop) -->
    <li class="nav-item d-none- d-md-block- mr-2">
      <form method="POST" action="{{ route('admin.switch.factory') }}">
        @csrf
        <select name="factory_id" onchange="this.form.submit()" 
          class="form-control form-control-sm">
          <option value="">TEAM GROUP (All)</option>
          @foreach(\App\Models\Factory::all() as $factory)
            <option value="{{ $factory->id }}"
              {{ session('current_factory_id') == $factory->id ? 'selected' : '' }}>
              {{ $factory->name }}
            </option>
          @endforeach
        </select>
      </form>
    </li>

    <!-- Desktop Logout Dropdown -->
    <li class="nav-item dropdown d-none d-md-block">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-user-circle"></i>
      </a>

      <div class="dropdown-menu dropdown-menu-right">
        <span class="dropdown-item dropdown-header">
          {{ auth()->user()->name }}
        </span>

        <div class="dropdown-divider"></div>

        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="dropdown-item text-danger">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </button>
        </form>
      </div>
    </li>

    <!-- Mobile Logout Icon Only -->
    <li class="nav-item d-block d-md-none">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="nav-link btn btn-link p-0 text-danger" title="Logout">
          <i class="fas fa-sign-out-alt"></i>
        </button>
      </form>
    </li>

  </ul>
</nav>
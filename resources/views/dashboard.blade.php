<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" ><img src="{{asset('backend/assets/images/logo.svg')}}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" ><img src="{{asset('backend/assets/images/logo-mini.svg')}}" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{asset('backend/assets/images/faces/face15.jpg')}}" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="pull-left info">
                        <p>{{ \Auth::user()->name  }}</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Active</a>
                    </div>

                </div>



                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">

                        <input type="text" name="q" class="form-control" placeholder="Search...">

                        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
                    </div>
                </form>


                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ url('/home') }}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>


                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('categories.index') }}">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
                        <span class="menu-title">Category</span>
                    </a>
                </li>


                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('products.index') }}">
        <span class="menu-icon">
          <i class="mdi mdi-playlist-play"></i>
        </span>
                        <span class="menu-title">Product</span>
                    </a>
                </li>


                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('customers.index') }}">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
                        <span class="menu-title">Customer</span>
                    </a>
                </li>


                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('suppliers.index') }}">
        <span class="menu-icon">
          <i class="mdi mdi-chart-bar"></i>
        </span>
                        <span class="menu-title">Supplier</span>
                    </a>
                </li>


                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('productsOut.index') }}">
        <span class="menu-icon">
          <i class="mdi mdi-contacts"></i>
        </span>
                        <span class="menu-title">Outgoing Products</span>
                    </a>
                </li>


                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('productsIn.index') }}">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
                        <span class="menu-title">Purchase Products</span>
                    </a>
                </li>


                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('user.index') }}">
        <span class="menu-icon">
          <i class="mdi mdi-chart-bar"></i>
        </span>
                        <span class="menu-title">System Users</span>
                    </a>
                </li>

    </ul>
</nav>

<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="/home"><img src="{{asset('backend/assets/images/264-2640114.png')}}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="/home"><img src="{{asset('backend/assets/images/264-2640114.png')}}" alt="logo" /></a>
    </div>


    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{asset('backend/assets/images/faces/face15.jpg')}}" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ \Auth::user()->name  }}</h5>
                        <span> Active </span>
                    </div>
                </div>
        </li>
        <li class="nav-item nav-category">
        </li>

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
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">Outgoing Products</span>
            </a>
        </li>


        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('productsIn.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
                <span class="menu-title">Purchase Products</span>
            </a>
        </li>


        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('user.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">System Users</span>
            </a>
        </li>



    </ul>
</nav>
<!-- partial -->




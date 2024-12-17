<div id="sidebar" class="sidebar">
      <div class="sidebar-content">
      <a class="navbar-brand" href="#">
      <img src="{{ asset('assets/images/image.png') }}" alt="Logo" style="max-width: 120px; border-radius: 45%;" class="d-inline-block align-end ms-4 my-3 ">
        <br><span class="text-light fs-5 p-4 text-center"><b>Dashboard</b></span>
        <hr>
      </a>

        <ul class="sidebar-nav">
          <!--<li class="sidebar-item">
            <a href="admin.php" class="sidebar-link">
              <i class="fa-solid fa-chart-line"></i>
              <span>Sales</span>
            </a>
          </li>-->
          <li class="sidebar-item">
            <a href="{{ route('products') }}" class="sidebar-link">
            <i class="fas fa-cube fa me-2"></i>
              <span class="text-light"><b>Product</b></span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="{{ route('customers') }}" class="sidebar-link">
      
              <i class="fas fa-user fa me-2"></i>
              <span class="text-light"><b>Customer</b></span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="{{ route('carts') }}" class="sidebar-link">
              <i class="fa-solid fa-cart-shopping"></i>
              <span class="text-light"><b>Cart</b></span>
            </a>  
            <hr>
            <a class="nav-link px-3" href="{{ route('logout') }}">Sign out <i class="fa-solid fa-right-from-bracket"></i></a>
      
          </li>
        </ul>
     
    </div>

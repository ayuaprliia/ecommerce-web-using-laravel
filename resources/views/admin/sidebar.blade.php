<div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('redirect')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Product</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-shopping menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('/view_product')}}">Add Product</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('/show_product')}}">Show Product</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('view_category')}}">
                <span class="menu-title">Category</span>
                <i class="mdi mdi-menu menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
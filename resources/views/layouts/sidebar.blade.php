
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="showhome" class="brand-link">
      <span class="brand-text font-weight-light">Yiwu Nabawi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

        </li>




        @if (Auth()->user()->type == 'admin')




          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


                <li class="nav-item">
                    <a href="addbgimg" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add bg Images</p>
                    </a>
                  </li>



                  <li class="nav-item">
                    <a href="addcatagory" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Catagory</p>
                    </a>
                  </li>




                  <li class="nav-item">
                    <a href="companyinfo" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Company Info</p>
                    </a>
                  </li>


                  <li class="nav-item">
                    <a href="offer" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Offers</p>
                    </a>
                  </li>



              <li class="nav-item">
                <a href="service" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Services</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="addproduct" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>

            </ul>
          </li>



          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

                <li class="nav-item">
                    <a href="products" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Products</p>
                    </a>
                  </li>




                <li class="nav-item">
                    <a href="alloffer" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>All Offers</p>
                    </a>
                  </li>




                  <li class="nav-item">
                    <a href="vieworder" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Orders</p>
                    </a>
                  </li>



                  <li class="nav-item">
                    <a href="test" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reviews</p>
                    </a>
                  </li>





              <li class="nav-item">
                <a href="showmember" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Members</p>
                </a>
              </li>


                <li class="nav-item">
                 <a href="msgs" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Messages</p>
                </a>
              </li>


            </ul>
          </li>

          @endif







          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Action
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="profile" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Profile</p>
                    </a>
                  </li>



                  <li class="nav-item d-flex">
                    <a href="">
                            <i class="far fa-circle nav-icon"></i>
                                <p>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-responsive-nav-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </p>
                            </a>
                  </li>

            </ul>
          </li>





        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

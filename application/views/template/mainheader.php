<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MINAT BAKAT</b>SISWA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">MINAT BAKAT <b>SISWA</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">
                <?php 
                  $user_data = $this->session->userdata();
                  echo $user_data['nama'];
                ?>
              </span>
            </a>
          </li>

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class=" fa fa-upload"></span>
              <span class="hidden-xs">Log Out</span>
            </a>

            <ul class="dropdown-menu" style="width: auto; min-width: 0">
              <!-- User image -->
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer" >
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>Login/logout" class="btn btn-danger btn-flat">Logout</i></a>
                </div>
              </li>
            </ul>

          </li>          
        </ul>
      </div>
    </nav>
  </header>
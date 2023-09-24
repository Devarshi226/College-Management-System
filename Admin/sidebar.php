  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../Admin/dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 inqury requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="../logout.php" class="nav-link" title="logout">
          Logout <i class="fa fa-sign-out-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../Admin/dashboard.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CMS Admin</span>
    </a>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-4">
      <ul class="nav nav-pills nav-sidebar flex-column dropdown" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= $site_url ?>admin/dashboard.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-itm has-treeview ">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Manage Accounts
              <i class="fas fa-angel-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= $site_url ?>admin/user-account.php?user=teacher" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Teachers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $site_url ?>admin/user-account.php?user=student" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Students</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Manage Classes -->
        <li class="nav-itm has-treeview ">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Manage Classes
              <i class="fas fa-angel-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= $site_url ?>admin/classes.php" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Classes</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="<?= $site_url ?>admin/courses.php" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Courses</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="<?= $site_url ?>admin/sections.php" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Courses</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $site_url ?>admin/subjects.php" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Subjects</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Manage Class Routine -->
        <li class="nav-itm has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Manage Class Routine
              <i class="fas fa-angel-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="<?= $site_url ?>admin/user-account.php?user=teacher" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Teachers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $site_url ?>admin/user-account.php?user=student" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Students</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="pages/UI/general.html" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Time Table</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="<?= $site_url ?>admin/UI/general.html" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Subjects</p>
              </a>
            </li> -->
          </ul>
        </li>

        <!-- Manage Examination -->
        <li class="nav-itm has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Manage Examination
              <i class="fas fa-angel-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/UI/general.html" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Exam Time Table</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Manage Event -->
        <li class="nav-itm has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Manage Event
              <i class="fas fa-angel-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="<?= $site_url ?>admin/event.php" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Events Details</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Manage student attendance -->
        <li class="nav-itm has-treeview">
          <a href="<?= $site_url ?>admin/student_attendance.php" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Student attendance
              <i class="fas fa-angel-left right"></i>
            </p>
          </a>
        </li>

        <!-- Manage System  -->
        <li class="nav-itm has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Manage System
              <i class="fas fa-angel-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./user-account.php?user=teacher" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Teachers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./user-account.php?user=student" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Students</p>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
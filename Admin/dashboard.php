<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Admin</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-school"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total students</span>
            <span class="info-box-number">
              980
            </span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total faculty</span>
            <span class="info-box-number">40</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-question"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">New Inquries</span>
            <span class="info-box-number">60</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-graduation-cap"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Engineering field</span>
            <span class="info-box-number">4</span>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>
<?php include('footer.php') ?>
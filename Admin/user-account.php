<?php include('../includes/config.php')?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2" >
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Manage Accounts</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Accounts</a></li>
          <li class="breadcrumb-item active"><?php echo ucfirst($_REQUEST['user'])  ?> </li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Main content -->
<section class="content">
  <div class="content-fluid">
    <div class="table-responsive">
      <table class="table table-bordered">
      <thead>
        <tr>
          <th>S.No.</th>
          <th>Name</th>
          <th>Email</th>
          <!-- <th>Action</th> -->
        </tr>
      </thead>
      <tbody>
        <?php
          $count = 1;
          $user_query = 'SELECT * FROM account where `role` ="'.$_REQUEST['user'].'"';
          $user_result = mysqli_query($db_conn, $user_query);
          while($users = mysqli_fetch_object($user_result))
          {  
            ?>
          <tr>
            <td><?=$count++?></td>
            <td><?=$users->Name?></td>
            <td><?=$users->email?></td>
            
          </tr>
          <?php } ?>
          
        </tbody> 
      </table> 
    </div>        
  </div>
</section> 


<?php include('footer.php') ?>
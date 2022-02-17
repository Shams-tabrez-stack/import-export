  <body>

    <div class="navbar  navbar-dark bg-dark py-3 mb-5">
        <div class="container-fluid mt-3">
          <a href="<?php echo base_url().'index.php/User/register';?>" class="navbar-brand btn btn-outline-dark ms-4">Create-User</a>
          <!-- <a href="<?php // echo base_url().'index.php/User/';?>" class="navbar-brand btn btn-outline-dark me-auto">Profiles</a> -->
          <h5 style="color:white;"> welcome <?php  echo ($_SESSION['user']['name']); ?></h5>
          <a class="navbar-brand btn btn-outline-dark float-end mx-4" href="<?php echo base_url().'index.php/Auth/logout' ?>" > Logout</a>
        </div>
      </div>

<br><br>

      <div class="container col-md-3">

<div class="list-group">
  <a href="<?php echo base_url().'index.php/Auth/register' ?>" class="list-group-item list-group-item-action active text-center">
Add new user  </a>
<?php foreach($users as $user){ ?>
<br>
  <a href="<?php echo base_url().'index.php/User/userdetails/'.$user['id'] ?>" class="list-group-item list-group-item-action"><?php echo $user['first_name'].' '.$user['last_name']; ?> </a>

  <div class="d-grid gap-2 d-md-block">
  <a href="<?php echo base_url().'index.php/User/edit/'.$user['id'] ?>" class="btn btn-primary float-end "><i class="fa fa-edit"></i>Edit</a>
  <a class="btn btn-danger float-end" onclick="return confirm('Press Ok to delete')" href="<?php echo base_url().'index.php/User/delete/'.$user['id']  ?>"><i class="fa fa-trash"></i>Delete</a>

  </div>

<?php } ?>
</div>

      </div>
  </body>
</html>

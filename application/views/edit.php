
  <body>

    <div class="navbar  navbar-dark bg-dark py-3 mb-5">
        <div class="container-fluid mt-3">
          <a href="<?php echo base_url().'index.php/User/admin';?>" class="navbar-brand btn btn-outline-dark ms-4">Go-Back</a>
          <!-- <a href="<?php // echo base_url().'index.php/User/';?>" class="navbar-brand btn btn-outline-dark me-auto">Profiles</a> -->
          <!-- <h5 style="color:white;"> welcome <?php // echo ($_SESSION['user']['name']); ?></h5> -->
          <a class="navbar-brand btn btn-outline-dark float-end mx-4" href="<?php echo base_url().'index.php/Auth/logout' ?>" > Logout</a>
        </div>
      </div>

  <form class="" name="register" action="<?php // echo base_url().'index.php/Auth/register' ?>" method="post">

  <div class="card-body">

<div class="form-group mb-3">
  <label for="name">First Name</label>
<input type="text" name="first_name" id="first_name" value="<?php echo set_value('first_name',$user['first_name']); ?>" class="form-control <?php //echo (form_error('first_name') != "") ? 'is_invalid' : ''; ?>"  placeholder="First Name">
 <?php echo  form_error('first_name'); ?>
</div>

<div class="form-group mb-3">
  <label for="name">Last Name</label>
<input type="text" name="last_name" id="last_name" value="<?php echo set_value('last_name',$user['last_name']); ?>" class="form-control" placeholder="Last Name">
<?php echo form_error('last_name'); ?>
</div>

<div class="form-group mb-3">
  <label for="name">Email</label>
<input type="email" name="email" id="email" value="<?php echo set_value('email',$user['email']); ?>" class="form-control" placeholder="Email">
<?php echo form_error('email'); ?>
</div>

<div class="form-group mb-3">
  <label for="name">Phone</label>
<input type="text" name="phone" id="phone" value="<?php echo set_value('phone',$user['phone']); ?>" class="form-control" placeholder="Phone">
<?php echo form_error('phone'); ?>
</div>

<div class="form-group mb-4">
  <label for="name">Password</label>
<input type="Password" name="password" id="password" value="<?php echo set_value('password',$user['password']); ?>" class="form-control" placeholder="Password">
<?php echo form_error('password'); ?>
</div>

<div class="form-group mb-4">
  <label for="name">Address</label>
<input type="text" name="address" id="address" value="<?php echo set_value('address',$user['address']); ?>" class="form-control" placeholder="Address">
<?php echo form_error('address'); ?>
</div>


<div class="form-group">
  <button class="btn btn-block btn-primary col-md-12">Update</button>
</div>

  </div>

    </form>
</div>

  </div>
</div>
    </body>
</html>

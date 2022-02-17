<body>
  <div class="container col-md-3  my-5 py-5 bg-light shadow-lg form d-flex justify-content-center">

    <form name="frm" action="<?php echo base_url().'index.php/Auth/login';?>" method="post">

      <?php
        $msg =$this->session->flashdata('msg');
        if($msg != ""){
          ?>
          <div class="alert alert-danger">
        <?php echo $msg  ?>
      </div>
      <?php
    }
      ?>

      <div class="form-group mx-5 ">
        <h3>SignIn</h3>
        <hr><br>
      </div>
      <div class="form-group  mx-4 ">
        <label for="Email">Email address</label>
        <input type="email" class="form-control " id="email" name="email" onkeyup="emailcheck();" placeholder="Enter email">
        <div id="email_error"> </div>

      </div>
      <br>
      <div class="form-group  mx-4">
        <label for="Password">Password</label>
        <input type="password" autocomplet="off" class="form-control " id="password" name="password" placeholder="Password" onkeyup="passwordcheck();">
        <div id="password_error"> </div>
      </div>
      <br>
      <div class="d-grid">

        <button type="submit" name="submit" class="btn btn-outline-primary btn-block mx-4 my-3" id="submit">Submit</button>
      </div>
    </form>
  </div>
  <script src="<?php  echo base_url().'assets/valid.js';?>" type="text/javascript">
  </script>

</body>

</html>

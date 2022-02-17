  <body>
    <div class="navbar  navbar-dark bg-dark py-3 mb-5">
        <div class="container-fluid mt-3">
          <a href="<?php echo base_url().'index.php/User/admin';?>" class="navbar-brand btn btn-outline-dark ms-4">Go-Back</a>
          <!-- <a href="<?php // echo base_url().'index.php/User/';?>" class="navbar-brand btn btn-outline-dark me-auto">Profiles</a> -->
          <!-- <h5 style="color:white;"> welcome <?php // echo ($_SESSION['user']['name']); ?></h5> -->
          <a class="navbar-brand btn btn-outline-dark float-end mx-4" href="<?php echo base_url().'index.php/Auth/logout' ?>" > Logout</a>
        </div>
      </div>
    <div class="row gutters-sm">
                <div class="col-md-12 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">

                        <div class="mt-3">
                          <h4><?php echo $details[0]['first_name'].' '.$details[0]['last_name']?></h4>
                          <p class="text-secondary mb-1">Full Stack Developer</p>
                          <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php  echo $details[0]['first_name'];  ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $details[0]['last_name'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $details[0]['phone'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      male
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $details[0]['email'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $details[0]['address'] ?>
                    </div>
                  </div>
               </div>
               <br><br><br>
               <table class="table">
                 <thead>
                   <tr>
                     <th scope="col">PIN</th>
                     <th scope="col">Saturation</th>
                     <th scope="col">First Name</th>
                     <th scope="col">Middle Name</th>
                     <th scope="col">Last Name</th>
                     <th scope="col">Suffix</th>
                     <th scope="col">Gender </th>
                     <th scope="col">Specialty</th>
                     <th scope="col">Sub-Specialty</th>
                     <th scope="col">Company Name</th>
                     <th scope="col">Division</th>
                     <th scope="col">Title</th>
                     <th scope="col">License</th>
                     <th scope="col">cretedAt</th>
       <th scope="col">Action</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <th>1</th>
                     <td>Marka</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>Mark</td>
                     <td>edit</td>
                     <td>delete</td>

                   </tr>
                   <tr>
                     <th>1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>Mark</td>

                   </tr>
                   <tr>
                     <th>1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>Mark</td>
                   </tr>
                 </tbody>
               </table>


               </div>
              </div>


  </body>
</html>

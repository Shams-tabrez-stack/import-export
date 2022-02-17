
  <body>
    <div class="navbar  navbar-dark bg-dark py-3 mb-5">
        <div class="container-fluid mt-3">
          <h5 style="color:white;"> welcome  <?php echo ($_SESSION['user']['name']); ?></h5>
          <a class="navbar-brand btn btn-outline-dark float-end mx-4" href="<?php echo base_url().'index.php/Auth/logout' ?>" > Logout</a>
        </div>
      </div>

        <div class=" container col-md-4 my-5  p-4 bg-light  d-flex justify-content-center">
    <form method="POST" id="import_csv" action="" enctype="multipart/form-data">
      <div class="form-group mb-2">
          <label>Select CSV File</label> <br>
          <input class="mt-3" type="file" name="csv_file" id="csv_file" required accept=".csv" />
      </div>
      <br>

      <button type="submit" name="import_csv" class="btn btn-info " id="import_csv_btn">Import</button>
      </form>
</div>
<div class="overflow-auto ">

<button type="submit" name="Export" class="btn btn-primary" id="import_csv_btn">Export</button>
<br><br>
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
  </body>
</html>

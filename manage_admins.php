<body class="container-fluid">
      <div class="row bg-primary vh-100">
          <div class="col-sm-2 bg-success p-0">
              <ul class="nav flex-column">
                      <a href="#" class="bg-dark border border-light h6 m-0 text-light row">
                          <i class="col-sm-2 fas fa-chart-line"></i>
                          <span class="col-sm-9">Dashboard</span>
                      </a>
                      <a href="#" class="bg-dark border border-light h6 m-0 text-light row">
                          <i class="col-sm-2 fas fa-comment-dots"></i>
                          <span class="col-sm-10">Manage Feedbacks</span>
                      </a>
                      <a href="#" class="bg-dark border border-light h6 m-0 text-light row">
                          <i class="col-sm-2 fas fa-users-cog"></i>
                          <span class="col-sm-10">Manage Admins</span>
                      </a>
                      <a href="#" class="bg-dark border border-light h6 m-0 text-light row">
                          <i class="col-sm-2 fas fa-sign-out-alt"></i>
                          <span class="col-sm-9">Log Out</span>
                      </a>
              </ul>
          </div> <!-- end of first row col 1 -->

          <div class="col-sm-10 bg-warning">

              <div class="row">
                  <div class="col-sm-6">
                      <form action="" method="post" class="bg-light d-flex justify-content-center flex-column p-4 shadow">
                          <h3 class="text-center bg-success p-3 text-white">Register administrator</h3>
                              <input type="text" name="first_name" placeholder="First Name" class="align-self-center w-50 px-2 m-2" required>
                              <input type="text" name="last_name" placeholder="Last Name" class="align-self-center w-50 px-2 m-2" required>
                              <input type="text" name="username" placeholder="Username" class="align-self-center w-50 px-2 m-2" required>
                              <input type="password" name="password" placeholder="Password" class="align-self-center px-2 w-50 m-2" required>
                              <input type="submit" name="register" class="align-self-center w-50 btn btn-primary m-2">
                      </form>
                  </div>
                  <table class="col-sm-6 table text-center bg-light">
                      <thead class="thead-dark">
                      <tr>
                          <th>#</th>
                          <th>USERNAME</th>
                          <th>FIRST NAME</th>
                          <th>LAST NAME</th>
                      </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Column1</td>
                              <td>Column2</td>
                              <td>Column3</td>
                              <td>Column4</td>
                          </tr>
                      </tbody>
                  </table>
              </div>

          </div> <!-- end of first row col 2 -->
      </div> <!-- end of first row container-->
  </body>

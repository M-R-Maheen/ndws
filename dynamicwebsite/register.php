<?php
include('includes/sessionstart.php');
if (isset($_SESSION["loggedin"])  && $_SESSION["loggedin"]==1){
      $_SESSION["loggedin"]==0;
            header('Location: http://localhost/dynamicwebsite/register.php');
      }
?>

<?php
include('includes/header.php');
?>
      <div class="col-md-8">
            <h3 class="text-primary">Registration</h3>
                  <form action="registersave.php" method="post" class="col-md-5 bg-light mt-5">
                        <div class="form-group">
                              <label for="exampleInputEmail1">Name </label>
                              <input type="text" name="name" class="form-control" placeholder="Enter You Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email" class="form-control" placeholder="Enter You Email Address" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" name="password" class="form-control" placeholder=" Enter Your Password" id="exampleInputPassword1">
                        </div>
                              <!-- check out
                              <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                              </div> -->
                        <button type="submit" class="btn btn-primary">Register</button>
                        </form>
      </div>
      <div class="col-md-8">
            Post
      </div>

<?php
      include('includes/footer.php');
?>
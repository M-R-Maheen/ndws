<?php
include('includes/sessionstart.php');
if (isset($_SESSION["loggedin"])  && $_SESSION["loggedin"]==1){
            header('Location: http://localhost/dynamicwebsite/index.php');
      }
?>

<?php
include('includes/header.php');
?>
            
      <div class="col-md-12">
            <img src="image/banner-login.webp" alt="Banner" class="w-100"></div>                    

                  <form action="logincheck.php" method="post" class="col-md-5 bg-light mt-5">
                        <div class="form-group">
                              <h3 class="text-primary">Login</h3>
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
                        <button type="submit" class="btn btn-primary">Login Now</button>
                        </form>
      </div>
      <div class="col-md-8">
            Post
      </div>

<?php
      include('includes/footer.php');
?>
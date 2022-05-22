

      <div class="col-md-4">
            <ul>
                  <li><a href="index.php">Home</a></li>
                  <?php
                  // session_start();
                  if (!isset($_SESSION["loggedin"])  || $_SESSION["loggedin"]==0){
                  ?>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Registration</a></li>
                  <?php
                  }
                  ?>
                  <?php
                  if (isset($_SESSION["loggedin"])  && $_SESSION["loggedin"]==1){
                  ?>
                  <li><a href="logout.php">Logout</a></li>
                  <li><a href="addpost.php"> Add Post</a></li>
                  <?php
                  }
                  ?>

                        </div>
                              <div class="col-md-12 text-center text-primary">
                                    Coyright@ 2022 Reserved Hostrare
                              </div>
                        </div>
                  </div>
            </div>   

            <!--bootstrap js, jquery, proper-->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
      </body>
</html>     

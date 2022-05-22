

<?php
include('includes/sessionstart.php');
if (!isset($_SESSION["loggedin"])  && $_SESSION["loggedin"]==1){
      $_SESSION["loggedin"]==0;
            header('Location: http://localhost/dynamicwebsite/addpost.php');
      }
?>

<?php
include('includes/header.php');
?>
      <div class="col-md-8">
            <h3 class="text-primary">Add Post</h3>
                  <form action="addpostsave.php" method="post" class="col-md-5 bg-light mt-5">
                        <div class="form-group">
                              <label for="exampleInputEmail1">Title </label>
                              <input type="text" name="title" class="form-control" placeholder="Write your title" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                              <label for="exampleInputEmail1">Content</label>
                              <input type="text" name="content" class="form-control" placeholder="Enter You content" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <button type="submit" class="btn btn-primary">Add Post</button>
                        </form>
      </div>
      <div class="col-md-8">
            Post
      </div>

<?php
      include('includes/footer.php');
?>
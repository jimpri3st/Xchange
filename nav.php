<nav id="nav-placeholder" class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top ">
  <a class="navbar-brand" href="#">Xchange</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Watchlist
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Item 1</a>
          <a class="dropdown-item" href="#">Item 2</a>
          <a class="dropdown-item" href="#">Item 3</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Categories
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">

        <?php
          //Fetchinng all the categories from category table
          $sql = "SELECT categoryId,name FROM category";
          $stmt = $ConnectingDB->query($sql);
          while ($DataRows = $stmt->fetch()) {
            $id = $DataRows["categoryId"];
            $categoryName = $DataRows["name"];
          ?>
          <a class="dropdown-item" href="items?id=<?php echo $id; ?>"> <?php echo $categoryName; ?> </a>
        <?php } ?>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Forum</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
    </ul>

    <div>
    <div class="text-right small">

    <!-- Welcome message -->
        <?php  
          if(confirm_Login()){  
          ?>  
            <span style="color:white;">Welcome <?php echo $_SESSION['username']; ?> <span>
          <?php } ?>
      </div>
      <ul class="navbar-nav ml-auto nav-flex-icons">

    <!-- Notify for Requests -->
        <?php  
          if(confirm_Login()){  
        ?> 
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light"><?php totalRequestsPending($_SESSION['userId']) ?>
            <i class="fas fa-envelope"></i>
          </a>
        </li>
        <?php } else { ?>
          <li class="nav-item"></li>
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
            <i class="fas fa-heart"></i>
          </a>
        </li>
        <li class="nav-item avatar dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-0"
              alt="avatar image">
          </a>
          <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
            aria-labelledby="navbarDropdownMenuLink-55">
            <a class="dropdown-item" href="profile.php">My Profile</a>

            <?php  
              if(confirm_Login()){  
            ?>  
            <a class="dropdown-item" type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#logoutModal">Logout</a>
                <a class="dropdown-item" type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#settingsModal">Settings</a>
            <?php  
              }  
              else{  
            ?>  
              <a class="dropdown-item" type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#loginModal">Login</a>
              <a class="dropdown-item" type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#registerModal">Register</a>
            <?php } ?> 

          </div>
        </li>
      </ul>
    </div>

  </div>
</nav>

<!-- Modals -->

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="loginForm" action="index.php" method="post">
        <?php
            echo ErrorMessage();
        ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submitLogin" id="submitLogin" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="logoutForm" action="index.php" method="post">
        <div class="form-group">
          Are you sure you want to logout?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" name="submitLogout" id="submitLogout" class="btn btn-primary">Yes</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="registerForm">
          <div class="form-group">
            <label for="rUsername">Username</label>
            <input type="text" class="form-control" id="rUsername" name="rUsername" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
              placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label for="rPassword">Password</label>
            <input type="password" class="form-control" id="rPassword" placeholder="Enter Password" name="rPassword">
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
              placeholder="Enter Password">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submitRegister" id="submitRegister" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Settings Modal -->
<div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Account settings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="d-flex align-items-start py-3 mb-4 border-bottom"> <img
            src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            class="img" alt="">
          <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
            <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
          </div>
        </div>
        <form id="settingsForm">
          <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter Firstname">
          </div>
          <div class="form-group">
            <label for="lastName">Lastname</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Lastname">
          </div>
          <div class="form-group">
            <label for="sUsername">Username</label>
            <input type="text" class="form-control" id="sUsername" name="sUsername" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label for="sEmail">Email Address</label>
            <input type="email" class="form-control" id="sEmail" aria-describedby="emailHelp" name="sEmail"
              placeholder="Enter Email">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submitSettings" id="submitSettings" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- End of Modals -->
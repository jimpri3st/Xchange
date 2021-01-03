<?php require_once("includes/db.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/session.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>

<body>

    <!---Navbar -->
    <?php require_once("nav.php"); ?>

    <!---Item Card -->
    <div class="jumbotron text-center">
  <h1>My Items</h1>

    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">    Add Item
                </button>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    <img class="card-img-top" src="images/uploaded/book2.jpg" alt="" width="260" height="195">
            <div class="card-body">        
                <div><small>Uploaded in 01.01.2021</small></div>
                <div>by <a> eefe1 </a></div>
                <div class="rating">
                    <span style="font-size: x-small; margin-top: 1.6%;">(25) </span>
                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                </div>
                <hr style="margin-top: 0;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consequuntur. </p>                            
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Exchange
                </button>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Edit
                </button>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Delete
                </button>
                </div>
    </div>
    <div class="col-sm-4">
    <img class="card-img-top" src="images/uploaded/book2.jpg" alt="" width="260" height="195">
            <div class="card-body">        
                <div><small>Uploaded in 01.01.2021</small></div>
                <div>by <a> eefe1 </a></div>
                <div class="rating">
                    <span style="font-size: x-small; margin-top: 1.6%;">(25) </span>
                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                </div>
                <hr style="margin-top: 0;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consequuntur. </p>                            
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Exchange
                </button>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Edit
                </button>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Delete
                </button>
                </div>
    </div>
    <div class="col-sm-4">
    <img class="card-img-top" src="images/uploaded/book2.jpg" alt="" width="260" height="195">
            <div class="card-body">        
                <div><small>Uploaded in 01.01.2021</small></div>
                <div>by <a> eefe1 </a></div>
                <div class="rating">
                    <span style="font-size: x-small; margin-top: 1.6%;">(25) </span>
                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                </div>
                <hr style="margin-top: 0;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consequuntur. </p>                            
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Exchange
                </button>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Edit
                </button>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Delete
                </button>
                </div>
    </div>
    <div class="col-sm-4">
    <img class="card-img-top" src="images/uploaded/book2.jpg" alt="" width="260" height="195">
            <div class="card-body">        
                <div><small>Uploaded in 01.01.2021</small></div>
                <div>by <a> eefe1 </a></div>
                <div class="rating">
                    <span style="font-size: x-small; margin-top: 1.6%;">(25) </span>
                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                </div>
                <hr style="margin-top: 0;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consequuntur. </p>                            
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Exchange
                </button>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Edit
                </button>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Delete
                </button>
                </div>
    </div>

    <div class="col-sm-4">
    <img class="card-img-top" src="images/uploaded/book2.jpg" alt="" width="260" height="195">
            <div class="card-body">        
                <div><small>Uploaded in 01.01.2021</small></div>
                <div>by <a> eefe1 </a></div>
                <div class="rating">
                    <span style="font-size: x-small; margin-top: 1.6%;">(25) </span>
                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                </div>
                <hr style="margin-top: 0;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consequuntur. </p>                            
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Exchange
                </button>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Edit
                </button>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Delete
                </button>
                </div>
    </div>
    <div class="col-sm-4">
    <img class="card-img-top" src="images/uploaded/book2.jpg" alt="" width="260" height="195">
            <div class="card-body">        
                <div><small>Uploaded in 01.01.2021</small></div>
                <div>by <a> eefe1 </a></div>
                <div class="rating">
                    <span style="font-size: x-small; margin-top: 1.6%;">(25) </span>
                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                </div>
                <hr style="margin-top: 0;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consequuntur. </p>                            
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Exchange
                </button>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Edit
                </button>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#requestModal">
                    Delete
                </button>
                </div>
    </div>
  </div>
</div>
    


    
     
<!---Item Card Finish-->

    <!--- Footer -->
    <?php require_once("footer.php"); ?>

    <!--- Script Source Files -->
    <!-- <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            navbarToggleSidebar();
            navActivePage();
        });
    </script> -->
    <!-- <script type="text/javascript" src="./main.85741bff.js"></script> -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.9.0/js/all.js"></script> 
    <script src="js/custom.js"></script>
    <script src="js/profile.js"></script>
    <!--- End of Script Source Files -->

</body>

</html>
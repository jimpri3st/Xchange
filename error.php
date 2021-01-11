<?php require_once("includes/db.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/session.php"); ?>

<?php

    $error = $_SERVER["REDIRECT_STATUS"];

    $error_title = '';
    $error_message = '';

    if($error == 404){
        $error_title = 'Page not Found';
        $error_message = 'This requested URL was not found on this server';
    }
    if($error == 403){
        $error_title = 'Forbidden';
        $error_message = 'You don;t have persimssion to access this url on this server';
    }
    if($error == 500){
        $error_title = 'Internal Server Error';
        $error_message = 'The server encountered an internal error or misconfiguration and was unable to complete you request';
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <style>
  
    body{
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);

    }
    .container{
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 30px;
        background-color: #deebdd;
        background-image: linear-gradient(315deg, #deebdd 0%, #bbdbbe 74%);
        box-shadow: 0 0 10px 10px rgba(0,0,0,.2);
        border-radius: 10px;
        background-image: URL(images/uploaded/pagenotfound.png); 
       
    }
    .text {
        font-family: futura;
        font-size:10rem;
        text-align: left;
        margin-bottom:40px;
        
    }
    .content{
        display: flex;
        justify-content:center;
        align-items: center;
        flex-direction: column;
        margin: 0 100px;
        padding: 0 100px;
        
    }
    .content h5 { 
        padding: 10px;
         
         }
    .content h1 {
        font-family: futura;
        margin-bottom: 26px;
        font-weight: bolder;
        display: block;
        font-size; 1.5rem;
        letter-spacing: 1px;
        
    }
    
    button{
        margin-top: 20px;
        padding: 16px 26px;
        border-radius: 50px;
        border: none;
        outline: none;
        color: #fff;
        background: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);
    }
    
    </style>
    <!---Navbar -->
    <?php require_once("nav.php"); ?>

    <br><br><br><br><br><br>
    
    <!-- Container  -->
    <div class="container">
    <h2 class="text">Oops!<h2>
    <div class="content">
        <h1><?php echo $error_title; ?></h1>
        <h5><?php echo $error_message; ?></h5>
        <button><a href="index.php">Go to Home</button>
    </div>
    </div>
    

    <!-- Modals -->
    <?php require_once("includes/modals.php"); ?>
    
    <!--- Footer -->
    <?php require_once("footer.php"); ?>

    <!--- Script Source Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/custom.js"></script>
    <?php if (isset($_SESSION["loginMessage"]) && $_SESSION["loginMessage"] == true) { ?>
    <script type="text/javascript"> $(document).ready(function() { $("#loginModal").modal("show"); }) </script>
    <?php } ?>
    <?php if (isset($_SESSION["registerMessage"]) && $_SESSION["registerMessage"] == true) { ?>
    <script type="text/javascript"> $(document).ready(function() { $("#registerModal").modal("show"); }) </script>
    <?php } ?>
    <?php if (isset($_SESSION["settingsMessage"]) && $_SESSION["settingsMessage"] == true) { ?>
    <script type="text/javascript"> $(document).ready(function() { $("#settingsModal").modal("show"); }) </script>
    <?php } ?>
    <!--- End of Script Source Files -->

</body>

</html> 
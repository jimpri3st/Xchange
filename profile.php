<?php require_once("includes/db.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/indexPHP.php"); ?> 
<?php require_once("includes/modals.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>

<body>

    <!---Navbar -->
    <?php require_once("nav.php"); ?>

    <!---Sidebar -->
    <div class="w3-container w3-padding-64" id="about">
        <h4 class="w3-border-bottom w3-border-light-grey w3-padding-16">eefe1</h4>
        <h4>Ezgi Efe</h4>
        <h4>esgiefe@gmail.com</h4>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, ipsa.
        </p>
        <h7>Reviews</h7><br>
        <div class="rating">
            <span style="font-size: x-small; margin-top: 1.6%;">(25) </span>
            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
        </div>
    </div>
<!---Item Card -->
<h3><a href="#" class="btn btn-danger">Add New Item</a></h3>


<div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="/images/uploaded/mobile1.jpg" alt="John" style="width:100%">
        <h3>Item Type</h3>
        <p class="w3-opacity">by <a>eefe1</a></p>
        <div class="rating">
            <span style="font-size: x-small; margin-top: 1.6%;">(25) </span>
            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
        </div>
        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        <p><button class="btn btn-primary">+</button>
            <button class="btn btn-primary">-</button>
            <button class="btn btn-primary">Edit</button></p>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="/images/uploaded/mobile1.jpg" alt="John" style="width:100%">
        <h3>Item Type</h3>
        <p class="w3-opacity">by <a>eefe1</a></p>
        <div class="rating">
            <span style="font-size: x-small; margin-top: 1.6%;">(25) </span>
            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
        </div>
        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        <p><button class="btn btn-primary">+</button>
            <button class="btn btn-primary">-</button>
            <button class="btn btn-primary">Edit</button></p>
    </div>


    <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="/images/uploaded/mobile1.jpg" alt="John" style="width:100%">
        <h3>Item Type</h3>
        <p class="w3-opacity">by <a>eefe1</a></p>
        <div class="rating">
            <span style="font-size: x-small; margin-top: 1.6%;">(25) </span>
            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
        </div>
        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        <p><button class="btn btn-primary">+</button>
            <button class="btn btn-primary">-</button>
            <button class="btn btn-primary">Edit</button></p>
    </div>


    <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="/images/uploaded/mobile1.jpg" alt="John" style="width:100%">
        <h3>Item Type</h3>
        <p class="w3-opacity">by <a>eefe1</a></p>
        <div class="rating">
            <span style="font-size: x-small; margin-top: 1.6%;">(25) </span>
            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
        </div>
        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        <p><button class="btn btn-primary">+</button>
            <button class="btn btn-primary">-</button>
            <button class="btn btn-primary">Edit</button></p>
    </div>

</div>

    <!--- Footer -->
    <?php require_once("footer.php"); ?>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.9.0/js/all.js"></script> 
    <script src="js/custom.js"></script>
    <script src="js/profile.js"></script>
    <!--- End of Script Source Files -->

</body>

</html>
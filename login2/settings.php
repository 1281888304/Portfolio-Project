<?php

//Turn on error reporting -- this is critical!


// header
require('includes/check-login.php');
$title = "Settings";
//If the form has been submitted
//check if empty: text box, text area; check if isset: check box, radio button, select list

//Get color
$color = $_POST['method'];
//Get size
$size = $_POST['size'];
$style=$_POST['style'];
if (isset($color)) {


    //Store color in the session array
    $_SESSION['color'] = $color;
}

if (isset($size)) {

    //Store size in the session array
    $_SESSION['size'] = $size;
}
if (isset($style)) {

    //Store size in the session array
    $_SESSION['style'] = $style;
}?>

<body>
<div class="container">
    <?php
    require("includes/navbar.html");
    ?>

    <h1>Settings</h1>
    <h3>Nav Bar Color</h3>

    <form class="col-sm-10" action="#" method="post">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="method" id="blue" value="blue"
                <?php if ($color == "blue") {
                    echo "checked";
                } ?>>
            <label class="form-check-label" for="blue">
                Blue
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="method" id="gray" value="gray"
                <?php if ($color == "gray") {
                    echo "checked";
                } ?>>
            <label class="form-check-label" for="gray">
                Gray
            </label>
        </div>
        <div class="form-check ">
            <input class="form-check-input" type="radio" name="method" id="purple" value="purple"
                <?php if ($color == "purple") {
                    echo "checked";
                } ?>>
            <label class="form-check-label" for="purple">
                Purple
            </label>
        </div>
        <br>

        <h4>Font size change</h4>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="style"  value="oblique"
            >
            <label class="form-check-label" for="html">
                oblique

            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="style"  value="normal">
            <label class="form-check-label" for="text">
                normal
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <?php
    require('includes/header.php');
    ?>
</div>
<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
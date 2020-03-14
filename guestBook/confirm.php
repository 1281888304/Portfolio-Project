<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
require("/home2/qzhanggr/db.php");


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <pre>
    <?php

    /*
    var_dump($_POST);


    */

    require('validation.php');
    $isValid=True;
    if(validName($_POST['firstName'])) {
        $fname = $_POST['firstName'];
    }else{
        echo "<p>first name is required.</p>";
        $isValid=false;
    }
    if(validName($_POST['lastName'])){
        $lname=$_POST['lastName'];
    }else{
        echo "<p>last name is required.</p>";
        $isValid=false;
    }
    /* email must be contain when mailbox checked
    if(validName($_POST['email'])){
        $email=$_POST['email'];
    }else{
        echo "<p> email is required.</p>";
        $isValid=false;
    }
    */
    if(isset($_POST['terms']) && $_POST['terms']!="")
    {
        if(validName($_POST['email'])){
            $email=$_POST['email'];
        }else{
            echo "<p> email is required.</p>";
            $isValid=false;
        }
    }



    if(validName($_POST['email'])){

        if(validEmail($_POST['email'])){
            $email=$_POST['email'];

        }
        else{
            echo "<p>email must validation.</p>";
            $isValid=false;

        }
    }


    if(validName($_POST['link'])){
        if(validURL($_POST['link'])){
            $link=$_POST['link'];

        }
        else{
            echo "<p>url must validation.</p>";
            $isValid=false;

        }
    }


    if(validSelect($_POST['meet'])){
        $meet=$_POST['meet'];
    }
    else{
        echo "<p>must choose a way</p>";
        $isValid=false;
    }

    if(validService($_POST['meet'])){
        $meet=$_POST['meet'];
    }
    else{
        echo "<p>Please dont change the value</p>";
        $isValid=false;
    }







    if($isValid) {
    echo "<p>all good and summary</p>";
    // add all teh value and use echo to print it all
    echo "<p>Name is $fname $lname</p>";
    echo "<p>Meet way is $meet</p>";
    $email=$_POST['email'];
    if($email!=""){
        echo "<p>email is $email</p>";
    }
    $link=$_POST['link'];
    if($link!=""){
        echo "<p>Linked in is $link</p>";
    }
    $first=mysqli_real_escape_string($cnxn,$_POST['firstName']);
    $last=mysqli_real_escape_string($cnxn,$_POST['lastName']);
    $job=mysqli_real_escape_string($cnxn,$_POST['job']);
    $company=mysqli_real_escape_string($cnxn,$_POST['company']);
    $email=mysqli_real_escape_string($cnxn,$_POST['email']);
    $link=mysqli_real_escape_string($cnxn,$_POST['link']);
    $meet=mysqli_real_escape_string($cnxn,$_POST['meet']);
    $other=mysqli_real_escape_string($cnxn,$_POST['other']);
    $method=mysqli_real_escape_string($cnxn,$_POST['method']);
    $message=mysqli_real_escape_string($cnxn,$_POST['message']);
    if(isset($_POST['terms']) && $_POST['terms']!="") {

        $sql = "INSERT INTO GuessBook (firstName, lastName, job, company, email, link, 
                meet,message,other,terms,method)
        VALUES('$first', '$last','$job', '$company', '$email', '$link ',
        '$meet','$message','$other','Checked','$method')";

    }else{

        $sql = "INSERT INTO GuessBook (firstName, lastName, job, company, email, link, 
                meet,message,other,terms,method)
        VALUES('$first', '$last','$job', '$company', '$email', '$link ',
        '$meet','$message','$other','Not Checked','$method')";

    }
        echo $sql;
//return
//send query to datebase
        $result=mysqli_query($cnxn,$sql);

        if($result){
            echo "Guest inserted successfully!";
        }


    }
    ?>
    </pre>
</body>
</html>
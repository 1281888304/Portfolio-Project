<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require("check-login.php");
require('/home2/qzhanggr/db.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>
<body>
<div class="container">

    <h3>GuestBook Admin</h3>

    <table id="guest-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>TimeStamp</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Job</th>
            <th>Company</th>
            <th>Email</th>
            <th>LinkedIn</th>
            <th>MeetWay</th>
            <th>Message</th>
            <th>Other</th>
            <th>Mailing CheckBox</th>
            <th>Email Format</th>

        </tr>
        </thead>


        <?php
        $sql="SELECT * FROM GuessBook";

        $result=mysqli_query($cnxn, $sql);

        //var_dump($result);

        //process the result
        foreach ($result as $row){
            //var_dump($row);
            $id=$row['id'];
            $time=$row['time'];
            $first=$row['firstName'];
            $last=$row['lastName'];
            $job=$row['job'];
            $company=$row['company'];
            $email=$row['email'];
            $meet=$row['meet'];
            $link=$row['link'];
            $message=$row['message'];
            $other=$row['other'];
            $terms=$row['terms'];
            $method=$row['method'];
            echo " 
            <tr>
                <td>$id</td>
                <td>$time</td>
                <td>$first</td>
                <td>$last</td>
                <td>$job</td>
                <td>$company</td>
                <td>$email</td>
                <td>$link</td>
                <td>$meet</td>
                <td>$message</td>
                <td>$other</td>
                <td>$terms</td>
                <td>$method</td>
            </tr>";
        }

        ?>

    </table>
    <a href="index.php">add Guest</a>
    <a href="logout.php">Log Out</a>

</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $('#guest-table').DataTable();
</script>





</body>
</html>
<?php

     $id = $_POST['id'];
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];

     $conn = mysqli_connect("localhost","root","","test") or die("connection failed" . mysqli_connect_error());

     $sql = "UPDATE students SET first_name = '{$first_name}', last_name = '{$last_name}' where id = $id";

    if (mysqli_query($conn, $sql)) {
        echo 1;
    } else {
        echo 0;
    }

?>
<?php
include 'conn.php';

if (isset($_POST["sub"])) {
    $fname=$_POST['fullname'];
    $lname=$_POST['lastname'];
    echo $fname.'<br>';
    echo $lname;


$sql = "INSERT INTO users (fname, lname)
VALUES ('$fname','$lname')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


?>
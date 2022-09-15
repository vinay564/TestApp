<?php
require ('db_connection.php');
?>
<?php

$f_name = $_POST['first_name'];
$l_name = $_POST['last_name'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$phone_number = $_POST['phone_number'];
$dbc_conn = mysqli_connect('localhost', 'root', '', 'ss_ee');
$sql = "INSERT INTO registration_tbl(first_name,last_name,email_id,password,mobile_number)
    VALUES ('$f_name','$l_name','$email','$password','$phone_number')";
if (mysqli_query($dbc_conn, $sql)) {
    echo "Records inserted successfully.";
} else {

    echo "ERROR: Could not able to execute $sql. ";
}
header('Location:login.php');
?>
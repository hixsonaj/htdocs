<?php
  include_once 'dbh.addresses.php';

  $address = mysqli_real_escape_string($conn, $_POST['address_input']);
  $sql = "INSERT INTO addresses (address) VALUES ('$address');";
  mysqli_query($conn, $sql);

  header("location: ../index.php");

?>

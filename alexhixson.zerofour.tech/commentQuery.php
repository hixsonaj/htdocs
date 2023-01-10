<?php
  include 'sqlconnect.php';

  if(!$con) {
    echo 'Not connected to server!';
  }

  $name = $_POST['name'];
  $comment = $_POST['comment'];

  $sql = "INSERT INTO comments (name,comment) VALUES ('$name','$comment')";
  if(!mysqli_query($con,$sql)) {
    echo 'Data not inserted';
  } else {
    echo 'Data inserted';
  }

  header("Location: http://alexhixson.zerofour.tech");

?>

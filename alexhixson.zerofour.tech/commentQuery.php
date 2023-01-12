<?php
  include 'sqlconnect.php';

  if(!$con) {
    echo 'Not connected to server!';
  }

  function RemoveSpecialChar($str) {
 
    // Using str_replace() function
    // to replace the word
    $string = str_replace( array( '\'', '"',
    ',' , ';', '<', '>' ), ' ', $str);

    // Returning the result
    return $string;
  }

  $name = RemoveSpecialChar($_POST['name']);
  $comment = RemoveSpecialChar($_POST['comment']);

  $sql = "INSERT INTO comments (name,comment) VALUES ('$name','$comment')";
  if(!mysqli_query($con,$sql)) {
    echo 'Data not inserted';
  } else {
    echo 'Data inserted';
  }

  header("Location: http://alexhixson.zerofour.tech");

?>

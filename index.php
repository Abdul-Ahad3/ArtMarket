<?php
  try{
    $connection = mysqli_connect("localhost", "root", "", "artattack");
  }
  catch(mysqli_sql_exception){echo "Not Connected <br>";}
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = filter_input(INPUT_POST, "e-mail", FILTER_SANITIZE_SPECIAL_CHARS);
    $fback = filter_input(INPUT_POST, "feedback", FILTER_SANITIZE_SPECIAL_CHARS);

    $stmt = $connection->prepare("INSERT INTO feedback VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $fback);

    $stmt->execute();

  }

  mysqli_close($connection);
?>
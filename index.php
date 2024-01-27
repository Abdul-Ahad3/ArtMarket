<?php
  try{
    $connection = mysqli_connect("localhost", "root", "", "artattack");
  }
  catch(mysqli_sql_exception){echo "Not Connected <br>";}
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $fback = filter_input(INPUT_POST, "feedback", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Doing";

    $sql = "INSERT INTO feedback (`E-mail`, `FeedBack`) VALUES ('$email', '$fback')";
    

    mysqli_query($connection, $sql);
  }

  mysqli_close($connection);
?>
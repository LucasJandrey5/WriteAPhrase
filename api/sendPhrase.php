<?php
include 'conexao_mysql.php';
$phrase = $_POST["newPhrase"];

if ($phrase !== '' && !str_contains($phrase, '‎')) {
  echo "phrase is ok!</br>";
  $sqlCode = "INSERT INTO phrases values (DEFAULT, '" . $_POST["newPhrase"] . "', DEFAULT, DEFAULT);";
  echo $sqlCode;
  $result = mysqli_query($con, $sqlCode);
  mysqli_close($con);
}else {
  echo "phrase is not ok!</br>";
}

header('Location: ./index.php');

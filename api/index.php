<?php
include 'conexao_mysql.php';
 
$sqlCode = "SELECT phrase FROM phrases ORDER BY RAND() LIMIT 1;--";
$result = mysqli_query($con, $sqlCode);

$row = mysqli_fetch_array($result);

mysqli_close($con);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.2">
  <title>Título</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
</head>

<body>
  <form class="container" action="sendPhrase.php" method="POST">

      <h1 class="current_phrase"><?php echo $row["phrase"];?></h1>

    <div class="phrase_input_box">
      <label for="newPhrase" class="input_label">Type your new phrase:</label>
      <input type="text" id="newPhrase" name="newPhrase" class="input">
    </div>
    <div class="sendButton_box">
      <input type="submit" id="sendButton" name="sendButton" class="sendButton" value="Send">
    </div>
  </form>
</body>

</html>
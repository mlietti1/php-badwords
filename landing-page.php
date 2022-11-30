<?php

$paragraph = $_POST['paragraph'];
$badword = $_POST['badword'];
$trimmed_par = trim($paragraph);
$length = strlen($trimmed_par);
$new_paragraph = str_replace( $badword, "***", $paragraph);
$new_length = strlen($new_paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords</title>
</head>
<body>
  <h3>Original Paragraph:</h3>
  <p>
    <?php echo $trimmed_par ?>
  </p>
  <p>Length: <?php echo $length ?> </p>
  <h3>Censored Paragraph:</h3>
  <p>
    <?php echo $new_paragraph ?>
  </p>
  <p>Length: <?php echo $new_length ?> </p>
</body>
</html>
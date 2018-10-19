<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $_POST['form3'];
  } else {
    echo 'no post <br>';
  }
 ?>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $_POST['form2'];
  } else {
    echo 'no post <br>';
  }
 ?>

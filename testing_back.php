<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $_POST['form1'];
  } else {
    echo 'no post <br>';
  }

 ?>

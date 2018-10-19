<?php
  include './ChromePhp.php';
  include './db_connect.php';
  include './form_identifiers.php';

  function securityFilter($conn, $data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($conn, $data);
    return $data;
  }


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    //Stored Booleans for checking $_POST values
    foreach ($formIdentifiers as $category => $value) {
      ${$category . 'Conditions'} = ''; //Store condition result
      ${$category . 'Boolean'} = array(); //Stores array of condition results
      foreach ($formIdentifiers[$category] as $subcategory => $value) {
        foreach ($formIdentifiers[$category][$subcategory] as $input => $value) {
          array_push(${$category . 'Boolean'}, !empty($_POST[$input]));//pushes to array
        }
      }
      if(count(array_unique(${$category . 'Boolean'})) === 1) {//Shrink to unique values and checks if number of values is 1
        ${$category . 'Conditions'} = current(${$category . 'Boolean'});//true
      } else {
        ${$category . 'Conditions'} = false;
      }
    }

    //include value for id column. Require the id if not present in the main form.
    if ($category1Conditions || $category2Conditions || $category3Conditions) {//Inserts values into columns of tables of the database

      $columns = '';
      $values = '';
      $dataType = '';
      $placeholder = '';
      foreach ($formIdentifiers as $category => $value) {
        if (${$category . 'Conditions'}) {
          foreach ($formIdentifiers[$category] as $subcategory => $value) {
            foreach ($formIdentifiers[$category][$subcategory] as $input => $value) {
              ${$input} = securityFilter($conn, $_POST[$input]);
              $columns .= $input . ',';
              $values .= "'" . ${$input} . "'" . ',';
              $placeholder .= '?' . ',';
              $dataType .= 's';
              ChromePhp::log(${$input});
            }
          }
          $values = rtrim($values, ',');
          $columns = rtrim($columns, ',');
          $placeholder = rtrim($placeholder, ',');
          $dataType = "'" . $dataType . "'";
          ChromePhp::log($values);
          ChromePhp::log($columns);
          ChromePhp::log($placeholder);
          ChromePhp::log($dataType);
          ${$category} = "INSERT INTO $category ($columns)
                           VALUES               ($placeholder);";
          ChromePhp::log(${$category});

          $stmt = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, ${$category})) {
           echo "SQL error";
         } else {
           mysqli_stmt_bind_param($stmt, $dataType, $values);
           mysqli_stmt_execute($stmt);
         }

        }
        $columns = '';
        $values = '';
        $dataType = '';
        $placeholder = '';

      }
      // header('Location: ../form_html.php?signup=success');
    } else {
      echo 'EMPTY FIELDS';
    }
  }


    // $stmtCategory1 = mysqli_stmt_init($conn);
    //
    // if(!myqli_stmt_prepare($stmtCategor1, $category1)) {
    //   echo 'SQL insert error @ category1'
    // } else {
    //   mysqli_stmt_bind_param($stmtCategory1, )
    // }

 ?>

<?php
  include './includes/db_connect.php';

  $table1 = "SELECT * FROM category1;";
  $table2 = "SELECT * FROM category2;";
  $table3 = "SELECT * FROM category3;";

  $result2 = mysqli_query($conn, $table2);
  $result3 = mysqli_query($conn, $table3);
  $result1 = mysqli_query($conn, $table1);

  $resultCheck1 = mysqli_num_rows($result1);
  $resultCheck2 = mysqli_num_rows($result2);
  $resultCheck3 = mysqli_num_rows($result3);

  //Basic Data Overview
  if ($resultCheck1 > 0) {
    echo '<table>' .
    '<tr>' .
    '<th>input111</th><th>input112</th><th>input113</th>
    <th>input121</th><th>input122</th><th>input123</th>
    <th>input131</th><th>input132</th><th>input133</th>
    <th>View/Edit</th>' .
    '</tr>' ;
      while ($row = mysqli_fetch_assoc($result1)) {
        echo
          '<tr>' .
            '<td>' . $row['input111'] . '</td> <td>' . $row['input112'] . '</td> <td>' . $row['input112'] . '</td>' .
            '<td>' . $row['input121'] . '</td> <td>' . $row['input122'] . '</td> <td>' . $row['input122'] . '</td>' .
            '<td>' . $row['input131'] . '</td> <td>' . $row['input132'] . '</td> <td>' . $row['input132'] . '</td>' .
            '<td>' . '<button type="button">View/Edit</button>' .
          '</tr>';
      }
      echo
      '</table>' .
      '<br>';
  }

  echo '<br>';

  //All Related Info per ID
  if ($resultCheck2 > 0) {
    echo '<table>';
      while ($row = mysqli_fetch_assoc($result2)) {
        echo
          '<tr>' .
            '<td>' . $row['input211'] . '</td> <td>' . $row['input212'] . '</td> <td>' . $row['input212'] . '</td>' .
            '<td>' . $row['input221'] . '</td> <td>' . $row['input222'] . '</td> <td>' . $row['input222'] . '</td>' .
            '<td>' . $row['input231'] . '</td> <td>' . $row['input232'] . '</td> <td>' . $row['input232'] . '</td>' .
          '</tr>';
      }
      echo
      '</table>' .
      '<br>';
  }

  echo '<br>';

  if ($resultCheck3 > 0) {
    echo '<table>';
      while ($row = mysqli_fetch_assoc($result3)) {
        echo
          '<tr>' .
            '<td>' . $row['input311'] . '</td> <td>' . $row['input312'] . '</td> <td>' . $row['input312'] . '</td>' .
            '<td>' . $row['input321'] . '</td> <td>' . $row['input322'] . '</td> <td>' . $row['input322'] . '</td>' .
            '<td>' . $row['input331'] . '</td> <td>' . $row['input332'] . '</td> <td>' . $row['input332'] . '</td>' .
          '</tr>';
      }
      echo
      '</table>' .
      '<br>';
      }
  //Statistics - display in list format
  //Data Overview - display in table format edit & view data + search engine

  //require password
  //data cannot be empty
 ?>

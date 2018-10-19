<?php include './includes/ChromePhp.php' ?><!--PHP Console Log (Chrome Logger)-->
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script>let write = (html) => {return document.write(html)}</script><!--Write to document object-->
    <?php include './includes/form_identifiers.php' ?>
    <link rel="stylesheet" href="./form.css">
    <title>Universal Form</title>
  </head>

  <body>
    <h2>Universal Form</h2>
    <nav>
      <button type="button" id="newDataBtn" > New Data    </button>
      <button type="button" id="editDataBtn"> Edit Data   </button>
    </nav>

    <form id="newDataForm" class="form display-none" action="<?php echo htmlspecialchars('./includes/new_data/new_data.php') ?>" method="post"><!--Form Input Fields-->
      <nav><!--Navigation Buttons-->
        <script src="./js/new_data/new_data_navigation.js"></script>
      </nav>
      <script src="./js/new_data/new_data.js"></script>
      <?php include './includes/new_data/new_data_algorithm.php' ?>
    </form>

    <form id="editDataForm" class="form display-none" action="<?php echo htmlspecialchars('./includes/edit_data/edit_data.php')?>" method="post">
      <nav>
        <script src="./js/edit_data/edit_data_navigation.js"></script><!-- UNUSED - Might consider making more dynamic-->
        <button type="button" id="statistics"  >Statistics         </button>
        <button type="button" id="dataOverview">Data Basic Overview</button>
      </nav>
      <script src="./js/edit_data/edit_data.js"></script>
      <?php include './includes/edit_data/edit_data_algorithm.php' ?>
    </form>

    <!--Form Algorithms-->
    <script src="./js/form_switch.js"></script>
  </body>

</html>

<!-- If form display is none all is none else use intended display settings -->
<!-- Seperate different forms into different classes -->

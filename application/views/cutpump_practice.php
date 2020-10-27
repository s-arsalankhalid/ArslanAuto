<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <?php 
    $link = array('href'  => 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css','rel'   => 'stylesheet','type'  => 'text/css');
    echo link_tag($link);
  ?>
</head>
<body>
  <div class="container">
    <?php
      $h1 = array('id' => 'cut_pump', 'class' => 'green');
      echo heading('Cut_Pump_Practice', 1,$h1);
      echo $title;
    //   print_r($title1) ;
    ?>
  </div>
</body>
</html>
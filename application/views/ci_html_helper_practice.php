<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    
    <!--  link tag -->
    <?php 
      $link = array('href'  => 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css','rel'   => 'stylesheet','type'  => 'text/css');
      echo link_tag($link);
    ?>
  </head>
  <body>
    <div class="container"> 
      <?php 
      // heading array
      $h1 = array('id' => 'Html_helper', 'class' => 'green');
      echo heading('HTML_Helper', 1,$h1);

      // image array
      $image_properties = array('src' => base_url('assets/img/blue_black_trans.png'),'alt'   => 'arslan auto blue balack image','class' => 'post_images','title' => 'That was quite a night','rel'   => 'lightbox');
      echo img($image_properties);
      
      // unordered list tag
      $list = array('red','blue','green','yellow');
      $attributes = array('class' => 'boldlist','id'   => 'mylist');
      echo ul($list, $attributes);
      
      // ordered list tag
      $attributes = array('class' => 'boldlist','id' => 'mylist');

      $list = array(
        'colors' => array(
          'red',
          'blue',
          'green'
        ),
        'shapes' => array(
          'round',
          'square',
          'circles' => array(
            'ellipse',
            'oval',
            'sphere'
          )
        ),
        'moods' => array(
          'happy',
          'upset' => array(
            'defeated' => array(
              'dejected',
              'disheartened',
              'depressed'
            ),
            'annoyed',
            'cross',
            'angry'
          )
        )
      );

      echo ul($list, $attributes);
      echo "hello" .nbs(6) ."Arsalan";
      ?>

      
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php 
      $link = array('href'  => 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css','rel'   => 'stylesheet','type'  => 'text/css');
      echo link_tag($link);
    ?>
  </head>
  <body>
    <?php echo heading('Form_Helper', 3);

    // form start
    $attributes = array('class' => 'email', 'id' => 'myform','style' => 'margin: 20px;');
    echo form_open('ci_practice_controller/formHelper', $attributes);

    // label array
    $email_lable = array('class' => 'mycustomclass','style' => 'color: #000; display:block; margin-top: 10px;');
    echo form_label('What is your email ', 'hiddenemail', $email_lable);

    // input array
    $email = array('name'  => 'email','id'    => 'hiddenemail','value' => 'john@example.com','class' => 'hiddenemail');
    echo form_input($email);

    // label array
    $pass_lable = array('class' => 'mycustomclass','style' => 'color: #000; display:block; margin-top: 10px;');
    echo form_label('What is your password ', 'pass', $pass_lable);

    // password array
    $pass = array('name'  => 'password','id'    => 'pass','placeholder' => 'enter you password','class' => 'password');
    echo form_password($pass);

    // dropdown input
    $options = array('small'   => 'Small Shirt','med'     => 'Medium Shirt','large'   => 'Large Shirt','xlarge'  => 'Extra Large Shirt');
    $shirts_on_sale = array('small', 'large');
    echo form_dropdown('shirts', $options, $shirts_on_sale,['id' => 'dropdown', 'style' => 'color: #000; display:block; margin-top: 10px;']);

    // checkbox
    $check = array('class' => 'check', 'id' => 'check','name' => 'checkbox', 'checked' => true);
    echo form_checkbox($check);

    // radio
    echo form_radio('rl','html',['id' => 'html']);
    echo form_label('html','html');
    echo form_radio('rl','css',['id' => 'css']);
    echo form_label('css', 'css');


    echo form_submit('mysubmit', 'Submit Post!', ['style' => 'color: #000; display:block; margin-top: 10px;']);
    echo form_close();
    // form end
    
    ?>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
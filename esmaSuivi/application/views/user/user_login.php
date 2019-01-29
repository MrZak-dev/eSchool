<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/css_libraries/reset.css">
    <link rel="stylesheet"  type="text/css" href="<?php echo base_url() ?>assets/css/css_libraries/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/css_libraries/font-awesome.min.css">
    <link rel="stylesheet"  type="text/css" href="<?php echo base_url() ?>assets/css/master.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <meta name="viewport" contant="width=device-width,initial-scale=1"/>
  </head>
  <body class="login-bg">
      <main class="container">
        <section class="login-section">
          <header class="login-header">
            <h2>E-Suivi LOGIN</h1>
          </header>
<?php
  $form_attribute = array(
    'class' => 'form-group',
    'id' => 'login-form'
    );
  $username_input = array(
    'class'=>' text-input',
    'type' => 'text',
    'name' => 'username',
    'placeholder'=>'Username'
  );
  $password_input = array(
    'class'=>' text-input',
    'type' => 'password',
    'name' => 'password',
    'placeholder'=>'Password'
  );
  $submit_input = array(
    'class' => 'btn btn-primary submit-btn',
    'type' => 'submit',
    'value' => 'LOGIN'
  );
            echo form_open('auth',$form_attribute);
              // echo form_label('Username');
              echo form_input($username_input);
              // echo form_label('Password');
              echo form_input($password_input);
              ?>
              <div class="the-btn">
                <button type="submit" class="btn btn-primary submit-btn" ><i class="fa fa-2x fa-sign-in" aria-hidden="true"></i></button>
              </div>
              <div class="alert alert-info" role="alert"><p>Entrez les données nécessaires !</p></div>
<?php
            echo form_close();
?>
        </section>
      </main>
  </body>
</html>

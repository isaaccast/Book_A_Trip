<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log In</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/public/css/bootstrap.min.css">
        <link rel="stylesheet" href="/public/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="/public/css/font-awesome.min.css">
        <link rel="stylesheet" href="/public/css/main.css">
        <link rel="stylesheet" href="/public/css/sl-slide.css">
    </head>
     <body>
       <h1>Book-a-Trip Inc.</h1>
       <section class="title">
        <h2>Registration/Login</h2>
      </section>
      <fieldset class="registration-form">
        <div id="register-page" class="container">


            <h3>Log In</h3>
                <div class='error'>
                   <?php

                      if($this->session->flashdata("login_error"))
                      {
                        echo $this->session->flashdata("login_error");
                      }
                    ?>
                </div>

              <form action="/trips/login" method="post">
                <div class="controls">
                  <input type="text" name="username" placeholder="Username">
                  <input type="password" name="password" placeholder="Password">
                  <input class ='btn btn-success btn-large btn-block' type="submit" value="Login" id='btn'>
                </div>
              </form>
        </div>

        <div id = 'register-page' class='container'>
            <h3>Or Register</h3>
                <div class='error'>
                    <?php
                      if($this->session->flashdata("register_error"))
                      {
                        echo $this->session->flashdata("register_error");
                      }
                    ?>
                </div>
                <div class='success'>
                    <?php
                      if($this->session->flashdata("register_success"))
                      {
                        echo $this->session->flashdata("register_success");
                      }
                    ?>
                </div>
            <form action='/trips/register' method='post'>
              <div class="controls">
                <input type='text' name='name' placeholder="Name">
                <input type='text' name='username' placeholder="Username">
                <input type='password' name='password' placeholder="Password">
                <input type='password' name='cpassword' placeholder="Password (Confirm)">
                <input type='submit' value='Register' class='btn btn-success btn-large btn-block' id='btn'>
              </div>
            </form>
        </div>
        </fieldset>
    </body>
</html>

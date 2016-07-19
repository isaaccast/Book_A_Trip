<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add New</title>
        <link rel=stylesheet href="/style.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/public/css/bootstrap.min.css">
        <link rel="stylesheet" href="/public/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="/public/css/font-awesome.min.css">
        <link rel="stylesheet" href="/public/css/main.css">
        <link rel="stylesheet" href="/public/css/sl-slide.css">
        <style type="text/css">

            .error{
                color: red;
                display: block;
            }
        </style>

    </head>
    <body>
        <a href="/trips/user_dashboard">Home</a><a href="/trips/logout">Logout</a>
      <section class="title">
        <h2>Add a Trip</h2>
      </section>
      <fieldset class="registration-form">

        <div class="controls">
          <form action='/trips/add_trip' method='post'>
              <input type='text' name='place' placeholder="Destination">
              <input type='text' name='plan' placeholder="Description">
              <label>Start Date:</label><input type='date' name='start'>
              <label>End Date:</label><input type='date' name='end'>
              <input type='submit' value="Add" class='btn btn-success btn-large btn-block'>
          </form>
        </div>
      </fieldset>
        <div class='error'>
                   <?php
                      if($this->session->flashdata("trip_error"))
                      {
                        echo $this->session->flashdata("trip_error");
                      }
                    ?>
                </div>
    </body>
</html>

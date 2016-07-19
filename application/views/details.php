<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trip Details</title>
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
        <a href="/trips/user_dashboard">Home</a><a href="/trips/logout">Log Off</a>
        <div id='recent'>
          <section class="title">

                <h3><?= $trip['place'] ?> </h3>
          </section>
                <p>Planned By:<?= $trip['planned_by'] ?></p>
                <p>Description:<?= $trip['plan'] ?></p>
                <p>Travel Date From:<?= $trip['start'] ?></p>
                <p>Travel Date To:<?= $trip['end'] ?></p>

        </div>
        <div>
            <h4>Other users' joining this trip:</h4>
            <?php
            // var_dump($companions);
            foreach ($companions as $companion) { ?>
                <p><?= $companion['name'] ?></p>
            <?php }?>

        </div>

    </body>
</html>

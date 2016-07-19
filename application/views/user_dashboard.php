<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
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
        <h2>Welcome <?= $this->session->userdata['name']?>!</section></h2><a href="/trips/add_page">Add Travel Plan</a> <a href="/trips/logout">Log Off</a>

        <div id='container'>
            <h3>Your Trip Schedules:</h3>
            <div id='trips'>
                <table class="table table-bordered">
                    <thead>
                        <th>Destination</th>
                        <th>Travel Start Date</th>
                        <th>Travel End Date</th>
                        <th>Plan</th>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($trips as $trip) {?>
                            <tr>
                                 <td><a href="/trips/details/<?= $trip['des_id'] ?>"><?= $trip['place'] ?></a></td>
                                <td><?= $trip['start'] ?></td>
                                <td><?= $trip['end'] ?></td>
                                <td><?= $trip['plan'] ?></td>
                            </tr>
                            <?php }
                            // var_dump($trips);
                         ?>
                    </tbody>
                </table>
            </div>

            <h3>Other User's Travel Plans:</h3>
             <div id='others'>
                <table class="table table-bordered">
                    <thead>
                        <th>Name</th>
                        <th>Destination</th>
                        <th>Travel Start Date</th>
                        <th>Travel End Date</th>
                        <th>Do You Want to Join?</th>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($others as $other) {?>

                             <tr>
                                <td><?= $other['planned_by'] ?></td>
                                <td><a href="/trips/details/<?= $other['id'] ?>"><?= $other['place'] ?></a></td>
                                <td><?= $other['start'] ?></td>
                                <td><?= $other['end'] ?></td>
                                <td><a href="/trips/add_des/<?= $other['id'] ?>">Join</a></td>
                            </tr>
                            <?php }
                         ?>
                    </tbody>
                </table>
            </div>

        </div>


    </body>
</html>

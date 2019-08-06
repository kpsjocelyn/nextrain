<?php
  $json_data = file_get_contents('nextrain.json');
  $data = json_decode($json_data);
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Nex-Train</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid mt-2">
      <div class="row">
        <div class="col-md-11 mt-2">
          <h1 class="mt-1">Vos prochains voyages</h1>
        </div>
        <div class="col-md-1 mt-2">
          <img src="sncf.png" alt="Logo SNCF" width="100%">
        </div>
      </div>
      <hr class="mb-5">
      <table class="table table-dark">
        <thead class="thead-light">
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Heure</th>
            <th scope="col">Destination</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><?= $data->{'line1'}->{'date'}; ?></th>
            <td><?= $data->{'line1'}->{'time'}; ?></td>
            <td class="text-uppercase"><?= $data->{'line1'}->{'destination'}; ?></td>
          </tr>
          <tr>
            <th scope="row"><?= $data->{'line2'}->{'date'}; ?></th>
            <td><?= $data->{'line2'}->{'time'}; ?></td>
            <td class="text-uppercase"><?= $data->{'line2'}->{'destination'}; ?></td>
          </tr>
          <tr>
            <th scope="row"><?= $data->{'line3'}->{'date'}; ?></th>
            <td><?= $data->{'line3'}->{'time'}; ?></td>
            <td class="text-uppercase"><?= $data->{'line3'}->{'destination'}; ?></td>
          </tr>
          <tr>
            <th scope="row"><?= $data->{'line4'}->{'date'}; ?></th>
            <td><?= $data->{'line4'}->{'time'}; ?></td>
            <td class="text-uppercase"><?= $data->{'line4'}->{'destination'}; ?></td>
          </tr>
          <tr>
            <th scope="row"><?= $data->{'line5'}->{'date'}; ?></th>
            <td><?= $data->{'line5'}->{'time'}; ?></td>
            <td class="text-uppercase"><?= $data->{'line5'}->{'destination'}; ?></td>
          </tr>
          <tr>
            <th scope="row"><?= $data->{'line6'}->{'date'}; ?></th>
            <td><?= $data->{'line6'}->{'time'}; ?></td>
            <td class="text-uppercase"><?= $data->{'line6'}->{'destination'}; ?></td>
          </tr>
          <tr>
            <th scope="row"><?= $data->{'line7'}->{'date'}; ?></th>
            <td><?= $data->{'line7'}->{'time'}; ?></td>
            <td class="text-uppercase"><?= $data->{'line7'}->{'destination'}; ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
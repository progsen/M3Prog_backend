<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temperaturen</title>
  <link rel="stylesheet" href="table-temps.css">
</head>
<body>
  <?php
  $temps = [
    "maandag" => 11.1,
    "dinsdag" => 9.6,
    "woensdag" => 8.2,
    "donderdag" => 10.6,
    "vrijdag" => 5.8,
    "zaterdag" => -1.5,
    "zondag" => -3.5,
  ];
  ?>
  <table>
    <?php foreach($temps as $dag => $temperatuur):?>
    <tr>
      <td><?php echo $dag?></td>
      <td><span class="temp"><?php echo $temperatuur ?> &#8451;</span></td>
    </tr>
    <?php endforeach;?>
  </table>
</body>

</html>
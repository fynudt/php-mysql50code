<?php
  $pictures = array('tire.jpg', 'oil.jpg', 'spark_plug.jpg',
                    'door.jpg', 'steering_wheel.jpg',
                    'thermostat.jpg', 'wiper_blade.jpg',
                    'gasket.jpg', 'brake_pad.jpg');

  shuffle($pictures);
?>
<html>
<head>
  <title>Bob's Auto Parts</title>
</head>
<body>

<h1>Bob's Auto Parts</h1>
<div align="center"> 
<table style="width: 100%; border: 0;" >
<tr>

<?php
  for ($i = 0; $i < 3; $i++) {
    echo "<td style='width: 33%; text-align: center;'>";
    echo $pictures[$i];
    echo "</td>";
  }
?>
</tr>
</table>
</div>
</body>
</html>

<!DOCTYPE html>

  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zahlenkette</title>
  </head>

  <body>

    <?php

      for($z=0; $z<=100; $z++) {

      if ($z > 0 && $z % 3 == 0) {
        echo "X";
      }

      if ($z > 0 && $z % 5 == 0) {
        echo "Y";
      }

      if ($z == 0 || $z % 3 <> 0 && $z % 5 <> 0) {
        echo "$z";
      }

       echo "<br>" ;

      }

    ?>

  </body>

</html>

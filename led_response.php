<!DOCTYPE html>
<html>
    <head>
        <title>php led response</title>
        <?php 
            $led = (int)($_GET["led_status"]);

            $raw = `./bme280`;
            $deserialized = json_decode($raw, true);
            $temp = echo $deserialized["temperature"];
            $pressure = echo $deserialized["pressure"];
            $altitude = echo $deserialized["altitude"];
        ?>
    </head>
    <body>
        <p><?= var_dump($_GET) ?></p>
<!--
        <?php 
            $output = `gpio mode 7 OUT`;
            $output = `gpio write 7 $led`;
        ?>
-->
        <p>temperature is  <?= $temp; ?> degrees celsius</p>
        <p>pressure is <?= $pressure;?> </p>
        <p>altitude is <?= $altitude; ?> </p>
    </body>
</html>
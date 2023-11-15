<!DOCTYPE html>
<html>
    <head>
        <title>php led response</title>
        <?php 
            $led = (int)($_GET["led_status"]);
        ?>
    </head>
    <body>
        <p><?= var_dump($_GET) ?></p>
        <?php 
            $output = `gpio mode 7 OUT`;
            $output = `gpio write 7 $led`;
        ?>
    </body>
</html>
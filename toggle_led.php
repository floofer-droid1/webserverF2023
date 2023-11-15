<!DOCTYPE html>
<html>
    <head>
        <title>lab 11: toggling an LED</title>
    </head>
    <body>
        <form action="led_response.php" method="GET">
        <p> set the LED to 0 </p>
        <input type="radio" id="led_off" name="led_status" value="0"> <label for="led_off">led is off</label>
        <p> set the LED to 1 </p>
        <input type="radio" id="led_off" name="led_status" value="1"> <label for="led_on">led is on</label>
        <p><input type="submit" /></p>
    </body>
</html>

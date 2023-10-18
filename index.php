<!DOCTYPE html>
<html>
    <head>
        <title>lab 7: figure out users coffee methods</title>
        <?php 
                $server = "localhost";
                $username = "php";
                $password = "caffeineaddict";
                $database = "coffee_stuff";
                $conn = mysqli_connect($server, $username, $password, $database);
                // check for successful connection
                if (!conn) {
                    die("connection failed: {mysqli_connect_error() }");
                }
                $sql = "select * from coffee_consumption_ways;";
                $result = mysqli_query($conn, $sql);
        ?>
    </head>
    <body>
        <p>How do you make coffee?</p>
        <form action="response.php" method="POST">
            <p> what beans do you use?</p>
            <?php
                foreach($result as $row)
                {
                    echo "<input type="radio" id='{$row['bean_type']}' name="bean_type" value ='{$row['bean_type']}'">;
                    echo "<label for="{$row['bean_type']}">{$row['bean_type']}</label>\n";
                }
            ?>
<!--
            <input type="radio" id="arabica" name="bean_type" value="arabica"> <label for="arabica">Arabica</label>
            <input type="radio" id="robusta" name="bean_type" value="robusta"> <label for="robusta">Robusta</label>
            <input type="radio" id="liberica" name="bean_type" value="liberica"> <label for="liberica">Liberica</label>
 --> 
            <p><label for="ground_type">how finely do you grind your beans (if you do at all)?</label><br>
            <select id="ground_type" name="ground_type">
                <?php
                    foreach($result as $row)
                    {
                        echo "<option value ='{$row['ground_type']}'>{$row['ground_type']}</option>\n";
                    }
                    mysqli_close($conn);
                ?>
 <!--           <option value="full_bean">full bean</option>
                <option value="coarse">coarse</option>
                <option value="fine">fine</option>
                <option value="extra_fine">extra fine</option>
-->
            <p>how do you brew your grounds?</p>
            <p><label for="brew_type">How do you brew it? </label><input type="text" id="brew_type" name="brew_type" /></p>
            </br>
            <p><input type="submit" /></p>
        </form>
    </body>
</html>
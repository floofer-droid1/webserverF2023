<!DOCTYPE html>
<html>
    <head>
        <title>php response</title>
        <?php 
                $server = "localhost";
                $username = "php";
                $password = "caffeineaddict";
                $database = "coffee_stuff";
                $conn = mysqli_connect($server, $username, $password, $database);
                // check for successful connection
                if (!$conn) {
                    die("connection failed: {mysqli_connect_error() }");
                }
                $sql = "select * from coffee_consumption_ways;";
                $result = mysqli_query($conn, $sql);

                $beans = htmlspecialchars ($_POST["bean_type"]);
                $grinds = htmlspecialchars ($_POST["ground_type"]);
                $method = htmlspecialchars ($_POST["brew_type"]);
        ?>
    </head>
    <body>
        <p>you use <?= $beans; ?> beans </p>
        <p>you grind them to a  <?= $grinds;?> consistency </p>
        <p>and you brew it by <?= $method; ?> </p>
        <?php
            $sql = "INSERT INTO coffee_consumption_ways (bean_type, ground_type, brew_type) VALUES ('$beans', '$grinds', '$method')";
            $result1 = mysqli_query($conn, $sql);
            echo "here's how other people brew their coffee";
            echo "<br />";
            echo "id:   |   grind size     |    brew type ";
            foreach($result as $row) {
                echo "<br />";
                echo "id:{$row["brew_id"]} | {$row["ground_type"]}  | {$row["brew_type"]}";
                echo "<br />";
            }
            mysqli_close($conn);
        ?>
    </body>
</html>
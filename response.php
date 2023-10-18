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
        ?>
    </head>
    <body>
        <p>you use <?= htmlspecialchars ($_POST["bean_type"])?> beans </p>
        <p>you grind them to a  <?= htmlspecialchars ($_POST["ground_type"])?> consistency </p>
        <p>and you brew it by <?= htmlspecialchars ($_POST["brew_type"])?> </p>
        <?php
            $sql = "INSERT INTO coffee_consumption_ways (bean_type, ground_type, brew_type) VALUES ('htmlspecialchars ($_POST["bean_type"])', 'htmlspecialchars ($_POST["ground_type"])', 'htmlspecialchars ($_POST["brew_type"])')";
            echo "here's how other people brew their coffee";
            echo "id:   |   grind size     |    brew type ";
            foreach($result as $row) {
                echo "id:{$row["brew_id"]} | {$row["ground_type"]}  | {$row["brew_type"]}";
            }
            mysqli_close($conn);
        ?>
    </body>
</html>
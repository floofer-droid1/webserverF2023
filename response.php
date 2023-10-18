<!DOCTYPE html>
<html>
    <head>
        <title>php response</title>
    </head>
    <body>
        <p>you use <?= htmlspecialchars ($_POST["bean_type"])?> beans </p>
        <p>you grind them to a  <?= htmlspecialchars ($_POST["ground_type"])?> consistency </p>
        <p>and you brew it by <?= htmlspecialchars ($_POST["brew_type"])?> </p>
        
    </body>
</html>
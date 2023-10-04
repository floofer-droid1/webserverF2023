<!DOCTYPE html>
<html>
    <head>
        <title>php response</title>
    </head>
    <body>
        <p>you are a <?= htmlspecialchars ($_POST["os"])?> user </p>
        <p>that likes to listen to their tunes the <?= htmlspecialchars ($_POST["music"])?> way </p>
        <p>your favourite phone manufacturer is <?= htmlspecialchars ($_POST["manufacturer"])?></p>
    </body>
</html>
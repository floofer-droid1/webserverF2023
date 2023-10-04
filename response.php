<!DOCTYPE html>
<html>
    <head>
        <title>php response</title>
    </head>
    <body>
        <p>you are a <?= htmlspecialhars ($_POST["os"])?> user </p>
        <p>that likes to listen to their tunes the <?= htmlspecialhars ($_POST["music"])?> way </p>
        <p>your favourite phone manufacturer is <?= htmlspecialhars ($_POST["manufacturer"])?></p>
    </body>
</html>
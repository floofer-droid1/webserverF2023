<!DOCTYPE html>
<html>
    <head>
        <title>lab 5: first php page</title>
    </head>
    <body>
        <p>tell us about you mobile preferences</p>
        <form action="response.php" method="POST">
            <p> what OS do you use?</p>
            <input type="radio" id="android" name="os" value="android"> <label for="android">Android</label>
            <input type="radio" id="ios" name="os" value="ios"> <label for="ios">ios</label>
            
            <p> who's you favourite phone manufacturer?</p>
            <p><label for="manufacturer">Favourite manufacturer: </label><input type="text" id="manufacturer" name="manufacturer" /></p>
            
            <p><label for="music">how do you listen to music?</label><br>
            <select id="music" name="music">
                <option value="wired">wired</option>
                <option value="wireless">Wireless</option>
            </br>
            <p><input type="submit" /></p>
        </form>
    </body>
</html>
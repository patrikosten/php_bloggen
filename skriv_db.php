<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title>Skriva blogginlägg</title>
        <link rel="stylesheet" href="style.css">
        <script src=""></script>
    </head>
    <body>
        <h2>Registrera inlägg</h2>

        <form action="spara_db.php" method="post">

                    <label>Rubrik</label><input type="text" maxlength="100" name="rubrik"><br>
                    <label>Text</label><textarea name="inlagg"></textarea><br>
                    <input type="submit" value="Spara">
        </form>
    </body>
</html>

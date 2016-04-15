<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title>Spara inlägg</title>
        <link rel="stylesheet" href="style.css">
        <script src=""></script>
    </head>
    <body>
        <?php

            //Ta emot data från formuläret
            $rubrik = $_POST['rubrik'];
            $inlagg = nl2br($_POST['inlagg'], false)
            //databasuppgifter
            $host = 'localhost';
            $user = 'osterberg_user';
            $password = 'osterberg_pass';
            $database = 'osterberg_db';

            //anslut
            $conn = new mysqli($host, $user, $password, $database);

            //fel vid anslutning
            if($conn->connect_error){
                die("Något gick fel vid anslutning" . $conn->connect_error);
            }

            //SQL-Kommando, fråga
            $sql = "INSERT INTO bloggen (rubrik, inlagg) VALUES ('$rubrik', '$inlagg')";

            //SQL-kommando, kör
            $result = $conn->query($sql);

            //Gick?
            if(!$result){

                die("Kunde inte spara inlägg: " . $conn->error);
            }
            else{
                echo"<h3>Inlägget registrerat</h3>";
            }

            //Stäng anslutning till databas
            $conn->close();
        ?>
    </body>
</html>

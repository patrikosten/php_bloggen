<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title>Visa inlägg</title>
        <link rel="stylesheet" href="style.css">
        <script src=""></script>
    </head>
    <body>
        <?php

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
            $sql = "SELECT * FROM bloggen";

            //SQL-kommando, kör
            $result = $conn->query($sql);

            //Gick?
            if(!$result){

                die("Kunde inte hämta inlägg: " . $conn->error);

            }
                echo"<h2>alla inlägg i bloggen</h2>";

                echo"<p>Hittat " . $result->num_rows . " inlägg</p>";
                //skriv ut alla inlägg
                while($row = $result->fetch_assoc()){

                    echo"<article>";
                    echo"<h3>" . $row['rubrik'] . "</h3>";
                    echo"<h4>" . $row['tidstampel'] . "</h4>";
                    echo"<p>" . $row['inlagg'] . "</p>";
                    echo"</article>";
                }



            //Stäng anslutning till databas
            $result->free();
            $conn->close();
        ?>
    </body>
</html>

<?php

            /*
            Hier wird die Verbindung zur Datenbank erstellt*/

            $mysqli = new mysqli("localhost", "bin", 
                                "1234", "formulartest");

            if ($mysqli->connect_error) {

            echo "Verbindungsfehler:" .mysqli_connect_error();
            exit();
            }


            
            /*Hier übergeben wir den Variablen $vorname, $nachname, $email global
            die Werte aus dem Formular mit $_Post["HIER KOMMT DER INPUT NAME AUS DEM HTML FORMULAR REIN"]
            , wichtig diese sollten vor der INSERT INTO Methode eingetragen werden sonst kann die Eintragung
            in die Datenbank nicht geschen!!!*/

            $vorname = $_POST["vorname"];
            $nachname = $_POST["nachname"];
            $email = $_POST["email"];




                /*Hier werden die Daten aus dem Formular 
            in die Tabelle formular welche in MySQL angelegt würde eingefügt */
                
            $sql = "INSERT INTO formular (vorname,nachname, email) 
            VALUES ('$vorname','$nachname', '$email')";

            if(!mysqli_query($mysqli, $sql))
            {
                echo "Leider kein Eintrag";
            }
                else 
            {
                echo "Eintrag erfolgreich";

            }



        


        /**Mit echo können wir die Daten aus dem Formular auf der Webseite ausgeben, der . fügt weitere Elemente dazu */
        echo 'Hallo '.$vorname.' '.$nachname;
        echo '</br>';

        echo 'Ihre Email lautet '.$email;
        echo '</br>';

?>
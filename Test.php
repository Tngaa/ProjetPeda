<meta utf-8>
<?php


define('DB_HOST', 'localhost:3306');
define('DB_NAME', 'cannesisup');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// Se connecter au serveur MySql. #mysqli_error() ça n'est un error a cause de version PHP afficher comme un error. 
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('Failed to connect to MySQL: ' . mysqli_error());
mysqli_select_db($connection, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());






$row = 1; //premiere ligne c'est un Header de
//cette partie importer le fichier .csv et ouvrir. 
if (($handle = fopen("participante.csv", "r")) !== FALSE) {

    //Instance de participant
    $participant = new Participant();



    echo '<table border="1">';

    while (($data = fgetcsv($handle, 10000, ";")) !== FALSE) {



        // echo $designation;
        $num = count($data);
        // Creation de la tableau
        if ($row == 1) {
            echo '<thead><tr>';
        } else {
            echo '<tr>';
        }

        // creation lignes et des colonnes de tableau
        for ($c = 2; $c < $num; $c++) {
            //echo $data[$c] . "<br />\n";
            if (empty($data[$c])) {
                //si pas de données, cellule vide
                $value = "&nbsp";
            } else {
                //sinon, on entre les données dans le tableau
                $value = $data[$c];
            }
            //Titre de chaque colonne
            if ($row == 0) {
                echo '<th>' . $value . '</th>';
            } else {
                //Insertion de donnée dans les colonnes choisies (2=prenom; 3= nom; 7=afterwork; 12=e-mail; 20=dodo; 22=societe; 23==fonction)  
                if ($c == 2 || $c == 3 || $c == 7 || $c == 12 || $c == 20 || $c == 22 || $c == 23) {

                    //Remplacer apostrophe par #slash.  
                    $value = str_replace("'", "\'", $value);
                    echo '<td>' . $value . '</td>';
                }


                //Declaration  les valeurs du colonnes. 

                switch ($c) {
                    case 2:
                        $participant->prenom = $value;
                        break;
                    case 3:
                        $participant->nom = $value;
                        break;
                    case 7:
                        $participant->afterwork = $value;
                        break;
                    case 12:
                        $participant->email = $value;
                        break;
                    case 20:
                        $participant->dodo = $value;
                        break;
                    case 22:
                        $participant->entreprise = $value;
                        break;
                    case 23:
                        $participant->fonction = $value;
                        break;
                }
            }
        }
        // Creation de fin de ligne
        if ($row == 1) {
            echo '</tr></thead><tbody>';
        } else {
            echo '</tr>';
            //inserer les données dans la table participant de base de données. 
            $query = "INSERT INTO participant (prenom, nom, email, entreprise, dodo, fonction, afterwork) VALUES ('$participant->prenom', '$participant->nom', ' $participant->email', '$participant->entreprise', '$participant->dodo', '$participant->fonction', '$participant->afterwork')";
            //Requete envoyer les données pour la table participant.
            $result = mysqli_query($connection, $query);
            //en cas de problème afficher message d'error.
            if (!$result) {
                die('Problème lors de la création en BDD');
            }
        }

        $row++;
    }

    echo '</tbody></table>';
    //Fremeture de fichier
    fclose($handle);
}





?>
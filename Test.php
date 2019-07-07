<meta utf-8>
<?php
// include 'configDB.php';
include 'Participant.php';
// include 'Activite.php';


define('DB_HOST', 'localhost');
define('DB_NAME', 'cannesisup');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// $DB_HOST = 'cannesisnesimplo.mysql.db';
// $DB_NAME = 'cannesisnesimplo';
// $DB_USER = 'cannesisnesimplo';
// $DB_PASSWORD = 'Stage0619';

//Se connecter au serveur M ySql. #mysqli_error() ça n'est un error a cause de version PHP afficher comme un error. 
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('Failed to connect to MySQL: ' . mysqli_error());
mysqli_select_db($connection, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());


// $mysqli = new mysqli("localhost", "root", "", "cannesisup");

// if (mysqli_connect_errno()) {
//     printf("Échec de la connexion : %s\n", mysqli_connect_error());
//     exit();
// }





$row = 1; //premiere ligne c'est un Header de
//cette partie importer le fichier .csv et ouvrir. 
if (($handle = fopen("export.csv", "r")) !== FALSE) {

    //Instance de participant

    // $activite = new Activite();



    echo '<table border="1">';
    $activites = array();

    while (($data = fgetcsv($handle, 10000, ";")) !== FALSE) {



        // echo $designation;
        $num = count($data);
        // Creation de la tableau
        if ($row == 1) {
            echo '<thead><tr>';
        } else {
            echo '<tr>';
        }
        $participant = new Participant();
        $choix = $participant->getChoix();

        // creation lignes et des colonnes de tableau
        for ($c = 2; $c < $num; $c++) {
            //echo $data[$c] . "<br />\n";
            if (empty($data[$c])) {
                //si pas de données, cellule vide
                $value = " ";
            } else {
                //sinon, on entre les données dans le tableau
                $value = $data[$c];
            }
            //Titre de chaque colonne
            if ($row == 0) {
                echo '<th>' . $value . '</th>';
            } else {
                //Insertion de donnée dans les colonnes choisies (2=prenom; 3= nom; 7=afterwork; 12=e-mail; 20=dodo; 22=societe; 23==fonction)  
                if ($c == 2 || $c == 3 || $c == 7 || $c == 12 || $c == 20 || $c == 22 || $c == 23 || $c == 24 || $c == 29 || $c == 30 || $c == 31 || $c == 34) {

                    //     //Remplacer apostrophe par #slash.  
                    $value = str_replace("'", "\'", $value);
                    $value = str_replace("*", "", $value);

                    $value = trim($value);
                    echo '<td>' . $value . '</td>';
                }


                //Declaration  les valeurs du colonnes. 

                switch ($c) {
                    case 2:
                        $participant->setPrenom($value);
                        break;
                    case 3:
                        $participant->setNom($value);
                        break;
                    case 7:
                        $participant->setAfterwork($value);
                        break;
                    case 12:
                        $participant->setEmail($value);
                        break;
                    case 20:
                        $participant->setDodo($value);

                        break;
                    case 22:
                        $participant->setEntreprise($value);
                        break;
                    case 23:
                        $participant->setFonction($value);
                        break;
                    case 24:
                        if (!empty($value)) {
                            array_push($choix, $value);

                            // if (!in_array($value, $activites)) {
                            //     array_push($activites, $value);
                            // }
                            // $participant->setChoix4($value);
                        }

                        break;
                    case 29:
                        if (!empty($value)) {
                            array_push($choix, $value);

                            // if (!in_array($value, $activites)) {
                            //     array_push($activites, $value);
                            // }
                            // $participant->setChoix4($value);
                        }
                        break;
                    case 30:
                        if (!empty($value)) {
                            array_push($choix, $value);

                            // if (!in_array($value, $activites)) {
                            //     array_push($activites, $value);
                            // }
                            // $participant->setChoix4($value);
                        }
                        break;
                    case 31:
                        if (!empty($value)) {
                            array_push($choix, $value);

                            // if (!in_array($value, $activites)) {
                            //     array_push($activites, $value);
                            // }
                            // $participant->setChoix4($value);
                        }
                        break;
                    case 34:
                        if (!empty($value)) {
                            array_push($choix, $value);


                            // $participant->setChoix4($value);
                        }
                        break;
                }
            }
        }
        // Creation de fin de ligne
        if ($row == 1) {
            echo '</tr></thead><tbody>';
        } else {
            echo '</tr>';
            //echo (implode($choix));

            $query = "INSERT INTO participant (prenom, nom, email, entreprise, dodo, fonction, afterwork) VALUES ('" . $participant->getPrenom() . "', '" . $participant->getNom() . "', '" . $participant->getEmail() . "', '" . $participant->getEntreprise() . "', '" . $participant->getDodo() . "', '" . $participant->getFonction() . "', '" . $participant->getAfterwork() . "')";
            $result = mysqli_query($connection, $query);
            // if (!isset($choi)) {
            foreach ($choix as &$choi) {

                if (!in_array($choi, $activites)) {
                    $query = "INSERT INTO activite (nom) VALUES ('" . $choi . "')";
                    $result = mysqli_query($connection, $query);
                    array_push($activites, $choi);
                }
                $query = "INSERT INTO resultat (id_participant, id_activite) SELECT ( SELECT id FROM participant WHERE  nom LIKE '%" . $participant->getNom() . "%' AND prenom LIKE '%" . $participant->getPrenom() . "%'), (SELECT id FROM activite WHERE  nom LIKE '%" . $choi . "%')";
                $result = mysqli_query($connection, $query);
            }










            // $row = mysqli_fetch_row($result);
            var_dump($row);
            echo $row[0];
        }

        $row++;
    }

    echo '</tbody></table>';
    //Fremeture de fichier
    fclose($handle);
}

?>
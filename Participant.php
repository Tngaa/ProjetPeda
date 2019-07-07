<?php

// include 'configDB.php';


//création de la class. touts les variables sont attributs de la class. 
class Participant

{
    private $id;
    private $prenom;
    private $nom;
    private $afterwork;
    private $email;
    private $dodo;
    private $entreprise;
    private $fonction;
    private $choix1;
    private $choix2;
    private $choix3;
    private $choix4;
    private $choix5;
    private $choix = array();


    //en Java constructeur c'est un function même nom comme la class.
    // Instance de la class. (c'est un version ou le code va être vivant?)
    function __construct()
    { }



    //$this un objet lui même.
    function getId()
    {
        // $query = "SELECT id FROM participant WHERE email LIKE '%" . $this->getEmail() . "%'";
        // $result = mysqli_query($connection, $query);
        return $this->id;
    }
    function getPrenom()
    {
        return $this->prenom;
    }

    function getNom()
    {
        return $this->nom;
    }

    function getAfterwork()
    {
        return $this->afterwork;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getDodo()
    {
        return $this->dodo;
    }

    function getEntreprise()
    {
        return $this->entreprise;
    }

    function getFonction()
    {
        return $this->fonction;
    }

    function getChoix1()
    {
        return $this->choix1;
    }
    function getChoix2()
    {
        return $this->choix2;
    }
    function getChoix3()
    {
        return $this->choix3;
    }
    function getChoix4()
    {
        return $this->choix4;
    }
    function getChoix5()
    {
        return $this->choix5;
    }
    function getChoix()
    {
        return $this->choix;
    }





    //Setters sauvegarder le changement.
    function setId($data)
    {
        $this->id = $data;
    }

    function setPrenom($data)
    {
        $this->prenom = $data;
    }

    function setNom($data)
    {
        $this->nom = $data;
    }

    function setAfterwork($data)
    {
        $this->afterwork = $data;
    }

    function setEmail($data)
    {
        $this->email = $data;
    }

    function setDodo($data)
    {
        $this->dodo = $data;
    }

    function setEntreprise($data)
    {
        $this->entreprise = $data;
    }

    function setFonction($data)
    {
        $this->fonction = $data;
    }

    function setChoix1($data)
    {
        $this->choix1 = $data;
    }
    function setChoix2($data)
    {
        $this->choix2 = $data;
    }
    function setChoix3($data)
    {
        $this->choix3 = $data;
    }
    function setChoix4($data)
    {
        $this->choix4 = $data;
    }
    function setChoix5($data)
    {
        $this->choix5 = $data;
    }
}

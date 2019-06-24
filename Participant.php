<?php

//creér la class
class Participant
{
    private $prenom;
    private $nom;
    private $afterwork;
    private $email;
    private $dodo;
    private $entreprise;
    private $fonction;

    function __construct()
    { }

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
}

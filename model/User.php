<?php

class User
{
    public int $id;
    public string $nom;
    public string   $prenom;

    public string $description;

    public function __construct($id, $nom, $prenom, $description)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->description = $description;
    }
}

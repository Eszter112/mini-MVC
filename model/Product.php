<?php
class Product
{
    public int $id;
    public string $nom;
    public float $prix;
    public string $description;

    public function __construct($id, $nom, $prix, $description)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->description = $description;
    }
}

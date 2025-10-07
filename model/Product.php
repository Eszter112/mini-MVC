<?php
class Product
{
    public int $id;
    public string $nom;
    public float $prix;

    public function __construct($id, $nom, $prix)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
    }
}

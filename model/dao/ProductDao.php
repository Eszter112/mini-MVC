<?php


class ProductDao
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllProducts()
    {
        $query = "SELECT * FROM `produit`";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // var_dump($data);

        $products = [];

        foreach ($data as $product) {
            $product = new Product($product["id"], $product["nom"], $product["prix"]);
            $products[] = $product;
        }
        return $products;
    }
}

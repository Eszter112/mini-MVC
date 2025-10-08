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
            $product = new Product($product["id"], $product["nom"], $product["prix"], $product["description"]);
            $products[] = $product;
        }
        return $products;
    }
    public function getProductById($id)
    {
        $query = "SELECT * FROM `produit` WHERE `id`=:id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':id' => $id]);

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($data) {
            return new Product($data["id"], $data["nom"], $data["prix"], $data["description"]);
        }
        return null;
    }

    public function deleteProductById($id)
    {
        $query = "DELETE FROM `produit` WHERE `id` = :id";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([":id" => $id]);
        // header('location: index.php?page=product');
        // exit;
    }

    public function addProduit($nom, $description, $prix)
    {
        $query = "INSERT INTO produit (nom, description, prix) VALUE (:nom , :description, :prix)";
        $stmt = $this->pdo->prepare($query);



        $stmt->execute([":nom" => $nom, ":description" => $description, ":prix" => $prix]);
    }

    public function updateProduit($id, $nom, $description, $prix)
    {
        $query = "UPDATE produit SET nom =:nom , description = :description , prix = :prix  WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([":id" => $id, ":nom" => $nom, ":description" => $description, ":prix" => $prix]);
    }
}


// UPDATE Customers
// SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
// WHERE CustomerID = 1;

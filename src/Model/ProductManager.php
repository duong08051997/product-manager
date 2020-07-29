<?php


namespace App\Model;


class ProductManager
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT `id`, `name`, `type` FROM `products`";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $arr = [];
        foreach ($data as $key => $item) {
            $product = new Product($item['name'], $item['type'],$item['price'],$item['quantity'],$item['date'],$item['description']);
            $product->setId($item['id']);
            array_push($arr, $product);
        }
        return $arr;
    }

    public function add($product)
    {
        $sql = "INSERT INTO `products`( `name`, `type`, `price`, `quantity`, `date`, `description`) VALUES (:name,:type,:price,:quantity,:date,:description)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $product->getName());
        $stmt->bindParam(":type",$product->getType());
        $stmt->bindParam(":price",$product->getPrice());
        $stmt->bindParam(":quantity",$product->getQuantity());
        $stmt->bindParam(":date",$product->getDate());
        $stmt->bindParam(":description",$product->getDescription());
        $stmt->execute();
    }

    public function getProductId($id)
    {
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->execute();
        return $stmt->fetch();


    }

    public function update($product)
    {
        $sql = "UPDATE `products` SET name = :name,type = :type, price = :price ,quantity =:quantity,date =:date, description= :description WHERE id= :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam('name', $product->getName());
        $stmt->bindParam('type', $product->getType());
        $stmt->bindParam('price', $product->getPrice());
        $stmt->bindParam('quantity', $product->getQuantity());
        $stmt->bindParam('date', $product->getDate());
        $stmt->bindParam('description', $product->getDescription());
        $stmt->bindParam('id', $product->getId());
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `products` WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function search($keyword)
    {
        $sql = "SELECT * FROM `products` WHERE name LIKE :keyword";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(':keyword', '%' . $keyword . "%");
        $stmt->execute();
        $data = $stmt->fetchAll();
        $arr = [];
        foreach ($data as $key => $item) {
            $product = new Product($item['name'], $item['type'],$item['price'],$item['quantity'],$item['date'],$item['description']);
            $product->setId($item['id']);
            array_push($arr, $product);
        }
        return $arr;
    }
}
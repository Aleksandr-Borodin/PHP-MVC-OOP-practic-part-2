<?php

class Model_Products extends Model{

    public function get_data(){

        $sql = "SELECT products.id, products.title, products.price, products.mark,
                products.description, category_products.title as category_name
                FROM products
                LEFT JOIN category_products ON products.id_catalog = category_products.id";

        $result = $this->_pdo->query($sql);

        if(!$result){
            return $result;
        }
        $records = $result->fetchAll(PDO::FETCH_ASSOC);
        return $records;

    }

    public function get_product($id){
        $sql = "SELECT products.id, products.title, products.price, products.mark,
                products.description, category_products.title as category_name
                FROM products
                LEFT JOIN category_products ON products.id_catalog = category_products.id WHERE products.id = :id";

        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $records = $stmt->fetch(PDO::FETCH_ASSOC);
        return $records;

    }


}
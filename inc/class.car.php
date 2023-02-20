<?php
/*
 * File:     class.car.php
 * Author:   Robert Baisan
 */
class Car {
    protected $db;

    public function __construct($db) {
        if(!$this->db) {
            $this->db = $db;
        }
    }

    //add car
    public function addCar($number, $brand_id, $model_id, $horse_power, $cc, $dors, $color, $price, $status) {
        $sql = "INSERT INTO car_cars( number, brand_id, model_id, hp, cc, dors, color, price, status, date_added) 
                    VALUES(:number, :brand_id, :model_id, :hp, :cc, :dors, :color, :price, :status, NOW())";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':number', $number, PDO::PARAM_STR);
            $sth->bindParam(':brand_id', $brand_id, PDO::PARAM_INT);
            $sth->bindParam(':model_id', $model_id, PDO::PARAM_INT);
            $sth->bindParam(':hp', $horse_power, PDO::PARAM_STR);
            $sth->bindParam(':cc', $cc, PDO::PARAM_STR);
            $sth->bindParam(':dors', $dors, PDO::PARAM_INT);
            $sth->bindParam(':color', $color, PDO::PARAM_STR);
            $sth->bindParam(':price', $price, PDO::PARAM_STR);
            $sth->bindParam(':status', $status, PDO::PARAM_INT);
            $sth->execute();
            
            return $this->db->lastInsertId();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
    //add car to wishlist
    public function addToWishlist($carID) {
        $userID = $_SESSION['u']['id'];
        $sql    = "INSERT INTO car_wishlist(car_id, user_id) VALUES(:car_id, :user_id)";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':car_id', $carID, PDO::PARAM_INT);
            $sth->bindParam(':user_id', $userID, PDO::PARAM_INT);
            $sth->execute();
            
            return $this->db->lastInsertId();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }

    //edit car
    public function editCar($carID, $number, $brand_id, $model_id, $horse_power, $cc, $dors, $color, $price, $status) {
       $sql = "UPDATE car_cars SET 
                    status = :status, 
                    brand_id = :brand_id, 
                    model_id = :model_id,
                    hp = :horse_power,
                    cc = :cc,
                    dors = :dors,
                    color = :color,
                    number = :number,
                    price = :price 
                WHERE id = :carID";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':carID', $carID, PDO::PARAM_INT);
            $sth->bindParam(':status', $status, PDO::PARAM_INT);
            $sth->bindParam(':brand_id', $brand_id, PDO::PARAM_INT);
            $sth->bindParam(':model_id', $model_id, PDO::PARAM_INT);
            $sth->bindParam(':horse_power', $horse_power, PDO::PARAM_STR);
            $sth->bindParam(':cc',$cc, PDO::PARAM_STR);
            $sth->bindParam(':dors', $dors, PDO::PARAM_INT);
            $sth->bindParam(':color', $color, PDO::PARAM_STR);
            $sth->bindParam(':number', $number, PDO::PARAM_STR);
            $sth->bindParam(':price', $price, PDO::PARAM_INT);
            return $sth->execute();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
    //get cars
    public function getCars($userID = 0, $brandID = 0, $modelID = 0, $sort = 0, $start = 0, $lot = 0, $total = 0) {
        $userIDW = $_SESSION['u']['id'];

        $sqlWhere = '';
        $sqlWhere2 = '';
        $sqlLot   = '';
        $sqlOrder = 'ORDER BY c.price';

        if($sort == 1){
            $sqlOrder = "ORDER BY c.price DESC";
        }

        if ($userID) {
            $sqlWhere = "AND c.user_id = :user_id";
        }
        if ($brandID) {
            $sqlWhere = "AND c.brand_id = :brand_id";
        }
        if ($modelID) {
            $sqlWhere2 = "AND c.model_id = :model_id";
        }
        if ($lot) {
            $sqlLot = "LIMIT :start, :lot";
        }
        if ($total) {
            $sql  = "SELECT COUNT(c.id) AS total FROM car_cars c
                    LEFT JOIN car_brands b ON b.id = c.brand_id
                    LEFT JOIN car_models m ON m.id = c.model_id
                    WHERE 1=1
                    $sqlWhere
                    $sqlWhere2
                    $sqlOrder
                    ";
                    
        }
        else {
            $sql  = "SELECT c.*, b.name AS brand, m.name AS model, COALESCE(w.car_id, 0) AS wishlist FROM car_cars c
                    LEFT JOIN car_brands b ON b.id = c.brand_id
                    LEFT JOIN car_models m ON m.id = c.model_id
                    LEFT JOIN car_wishlist w ON w.car_id = c.id AND w.user_id = :user_idw
                    WHERE 1=1
                    $sqlWhere
                    $sqlWhere2
                    $sqlOrder
                    $sqlLot";
                    
                    
        }
        
        try {
            $sth = $this->db->prepare($sql);
            
            
            if (!$total) {
                $sth->bindParam(':user_idw', $userIDW, PDO::PARAM_INT);
            }
            if ($userID) {
                $sth->bindParam(':user_id', $userID, PDO::PARAM_INT);
            }
            if ($brandID) {
                $sth->bindParam(':brand_id', $brandID, PDO::PARAM_INT);
            }
            if ($modelID) {
                $sth->bindParam(':model_id', $modelID, PDO::PARAM_INT);
            }
            if ($lot) {
                $sth->bindParam(':start', $start, PDO::PARAM_INT);
                $sth->bindParam(':lot', $lot, PDO::PARAM_INT);
            }
            $sth->execute();
            if ($total) {
                return $sth->fetchColumn();
            }
            else {
                return $sth->fetchAll();
            }

        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
    //get cars for pagination
    public function getCarsLimited($page_first_result, $number_of_pages) {
        $sql  = "SELECT c.*, b.name AS brand, m.name AS model FROM car_cars c
                LEFT JOIN car_brands b ON b.id = c.brand_id
                LEFT JOIN car_models m ON m.id = c.model_id
                ORDER BY date_added
                LIMIT :page_first_result,:number_of_pages
                ";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':page_first_result', $page_first_result, PDO::PARAM_INT);
            $sth->bindParam(':number_of_pages', $number_of_pages, PDO::PARAM_INT);
            $sth->execute();
            return $sth->fetchAll();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
    //get wishlist
    public function getWishlist() {
        $userID = $_SESSION['u']['id'];

        $sql  = "SELECT w.*, c.*, b.name AS brand, m.name AS model FROM car_wishlist w
                LEFT JOIN car_cars c ON c.id = w.car_id
                LEFT JOIN car_brands b ON b.id = c.brand_id
                LEFT JOIN car_models m ON m.id = c.model_id
                WHERE w.user_id = :userID";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':userID', $userID, PDO::PARAM_INT);
            $sth->execute();
            return $sth->fetchAll();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
    //get cars based by wishlist
    public function suggestWishlistCars() {
        $userID = $_SESSION['u']['id'];

        $sql  = "SELECT c.*, b.name AS brand, m.name AS model, car_id, COUNT(car_id) AS total FROM car_wishlist w 
                    LEFT JOIN car_cars c ON c.id = w.car_id
                    LEFT JOIN car_brands b ON b.id = c.brand_id
                    LEFT JOIN car_models m ON m.id = c.model_id

                    WHERE w.user_id IN (
                        SELECT w.user_id FROM car_wishlist w WHERE w.car_id IN (SELECT car_id FROM car_wishlist WHERE user_id = :userID) AND w.user_id != :userID 
                    ) 
                    AND w.car_id NOT IN (SELECT car_id FROM car_wishlist WHERE user_id = :userID)

                GROUP BY w.car_id
                ORDER BY total DESC";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':userID', $userID, PDO::PARAM_INT);
            $sth->execute();
            return $sth->fetchAll();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
    //get brands
    public function getBrands() {
        $sql  = "SELECT * FROM car_brands";
        try {
            $sth = $this->db->prepare($sql);
            $sth->execute();
            return $sth->fetchAll();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
    public function getModels($brand_id = 0) {  
        if($brand_id==0){
            $sql  = "SELECT * FROM car_models";
        }
        else {
            $sql = "SELECT a.name, a.id FROM car_models a LEFT JOIN car_brands b ON a.brand_id = b.id WHERE a.brand_id = :brand_id ";     
        }
        try {

            $sth = $this->db->prepare($sql);
            if($brand_id)
                $sth->bindParam(':brand_id', $brand_id, PDO::PARAM_INT);
            $sth->execute();
            return $sth->fetchAll();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
    //get car
    public function getCar($carID) {
        $sql = "SELECT c.*, b.name AS brand, m.name AS model FROM car_cars c 
                LEFT JOIN car_brands b ON b.id = c.brand_id
                LEFT JOIN car_models m ON m.id = c.model_id
                WHERE c.id = :carID";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':carID', $carID, PDO::PARAM_INT);
            $sth->execute();
            return $sth->fetch();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
    //delete car
    public function deleteCar($carID) {
        $sql = "DELETE FROM car_cars WHERE id = :carID";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':carID', $carID, PDO::PARAM_INT);
            $sth->execute();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
    //delete from wishlist
    public function removeFromWishlist($carID) {
        $userID = $_SESSION['u']['id'];
        $sql    = "DELETE FROM car_wishlist WHERE car_id = :carID AND user_id = :userID";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':carID', $carID, PDO::PARAM_INT);
            $sth->bindParam(':userID', $userID, PDO::PARAM_INT);
            $sth->execute();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
}
?>
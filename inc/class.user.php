<?php
/*
 * File:     class.user.php
 * Author:   Robert Baisan
 */
class User {
    protected $db;

    public function __construct($db) {
        if(!$this->db) {
            $this->db = $db;
        }
    }

    //add user
    public function addUser($type, $status, $email, $password) {
        $sql = "INSERT INTO car_users(type, status, email, password, date_added) 
                VALUES(:type, :status, :email, :password, NOW())";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':type', $type, PDO::PARAM_INT);
            $sth->bindParam(':status', $status, PDO::PARAM_INT);
            $sth->bindParam(':email', $email, PDO::PARAM_STR);
            $sth->bindParam(':password', $password, PDO::PARAM_STR);
            $sth->execute();
            
            return $this->db->lastInsertId();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }

    public function addMessage($text, $sender, $receiver) {
        $sql = "INSERT INTO messages(text, sender, receiver, time) 
                VALUES(:text, :sender, :receiver, NOW())";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':text', $text, PDO::PARAM_STR);
            $sth->bindParam(':sender', $sender, PDO::PARAM_INT);
            $sth->bindParam(':receiver', $receiver, PDO::PARAM_INT);
            $sth->execute();
            
            return $this->db->lastInsertId();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }

    //edit user
    public function editUser($userID, $type, $status, $email, $password) {
       $sql = "UPDATE car_users SET type = :type, status = :status, email = :email, password = :password WHERE id = :userID";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':userID', $userID, PDO::PARAM_INT);
            $sth->bindParam(':type', $type, PDO::PARAM_INT);
            $sth->bindParam(':status', $status, PDO::PARAM_INT);
            $sth->bindParam(':email', $email, PDO::PARAM_STR);
            $sth->bindParam(':password', $password, PDO::PARAM_STR);
            return $sth->execute();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
    //get users
    public function getUsers() {
        $sql  = "SELECT * FROM car_users";

        try {
            $sth = $this->db->prepare($sql);
            $sth->execute();
            return $sth->fetchAll();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }

    public function getConversations($user) {
        $sql  = "select id, LEFT(email, LOCATE('@', email) - 1) as email from car_users 
        WHERE id in (
            (SELECT DISTINCT (receiver) as conversations FROM messages WHERE sender = :user) 
            UNION 
            (SELECT DISTINCT (sender) as conversations FROM messages WHERE receiver = :user)
            )";

        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':user', $user, PDO::PARAM_INT);
            $sth->execute();
            return $sth->fetchAll();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }

    public function getMessages() {
        $sql  = "SELECT * FROM messages";

        try {
            $sth = $this->db->prepare($sql);
            $sth->execute();
            return $sth->fetchAll();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
    //get user
    public function getUser($userID) {
        $sql = "SELECT * FROM car_users WHERE id = :userID";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':userID', $userID, PDO::PARAM_INT);
            $sth->execute();
            return $sth->fetch();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
    //login
    public function login($email, $password) {
         // AND password = :password
        $sql = "SELECT * FROM car_users WHERE email = :email";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':email', $email, PDO::PARAM_STR);
            $sth->execute();
            $r = $sth->fetch();
            
            // d($r);die;
            if (password_verify($password, $r['password'])) {
                $_SESSION['logged_id'] = 1;
                $_SESSION['u']         = $r;
                return 1;
            }
            return 0;
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
    //logout
    public function logout() {
        unset($_SESSION['logged_id']);
    }
    //isLogged
    public function isLogged() {
        if (isset($_SESSION['logged_id']) && $_SESSION['logged_id']) {
            return 1;
        }
        return 0;
    }
    //is admin
    public function isAdmin() {
        if (isset($_SESSION['u']) && !$_SESSION['u']['type']) {
            return true;
        }
        return false;
    }
    //delete user
    public function deleteUser($userID) {
        $sql = "DELETE FROM car_users WHERE id = :userID";
        try {
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':userID', $userID, PDO::PARAM_INT);
            $sth->execute();
        }
        catch(PDOException $e) {
            displayError(__METHOD__, $e->getMessage());
        }
    }
}
?>
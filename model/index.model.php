<?php
#send to db

class usermodel{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }
    public function createUser($dbusername, $email, $dbpassword){



    public function save($id=null){
        if(empty($id)) {
            $stmt = $this->conn->prepare("INSERT INTO users (username, email, password) values (:dbusername, :email, :dbpassword)");
            $stmt->bindParam(':dbusername', $dbusername);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':dbpassword', $dbpassword);
            $stmt->execute();
        } else {
            $sql = "update users set username = $dbusername, email = $email, password = $dbpassword where id = $id";
        }
        }
    }



    public function delete($id){
        global $conn;
        try{
            $sql = "DELETE FROM user WHERE id = :id";
            $conn->excec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
}



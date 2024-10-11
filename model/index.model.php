<?php
#send to db

class usermodel{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }



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
}



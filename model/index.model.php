<?php
#send to db

class usermodel{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }
    public function createUser($dbusername, $email, $dbpassword){
        $stmt = $this->conn->prepare("INSERT INTO users (username, email, password) values (:dbusername, :email, :dbpassword)");
        $stmt->bindParam(':dbusername', $dbusername);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':dbpassword', $dbpassword);
        $stmt->execute();
    }
}



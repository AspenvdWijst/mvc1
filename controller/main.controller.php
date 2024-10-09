<?php
class mainController{
    private $usermodel;

    public function __construct($conn){
        require "./model/index.model.php";
        $this->usermodel = new UserModel($conn);
    }

    public function index(): void{
        require "./view/index.view.php";
    }
    public function makeuser(): void{
        $this->usermodel->createUser($_POST["dbusername"], $_POST["email"], $_POST["dbpassword"]);
        require 'view/index.view.php';
    }
}
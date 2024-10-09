<?php
class mainController{
    private $usermodel;
    public function __construct($conn)
    {
        require "./model/index.model.php";
        $this->usermodel = new UserModel($conn);
    }

    public function index(): void
    {
        require "./view/index.view.php";
    }

    public function makeuser(): void
    {
        $this->usermodel->createUser($_POST["dbusername"], $_POST["email"], $_POST["dbpassword"]);
        require 'view/index.view.php';
    }

    public function functions(): void{
        include './model/index.model.php';
        switch ($_GET['action']) {
            case 'save':
                save();
                break;
            case 'delete':
                delete($_GET['id']);
                break;
            case 'update';
            $data = update($_GET['id']);
                break;
            case 'list';
                break;
        }
    }
}
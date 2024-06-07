<?php
require_once "../src/Models/UsersModel.php";
class ClientController{
    private UsersModel $usersModel;
    public function __construct(){
        $this->usersModel = new UsersModel;
        $this->load();
    }
    public function load(){
        $this->listeClient();
    }
    private function listeClient(){
        $data = $this->usersModel->findAllUsersByProfil("Client");
        echo json_encode($data);
        //Json
    }
}
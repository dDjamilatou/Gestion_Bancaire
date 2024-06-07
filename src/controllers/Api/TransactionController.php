<?php
require_once "../src/Models/TransactionModel.php";
class CompteController{
    private TransactionModel $transModel;
    public function __construct(){
        $this->transModel = new TransactionModel;
        $this->load();
    }
    public function load(){
        $this->listeTransaction();
    }
    private function listeTransaction(){
        $data = $this->transModel->findAllTransaction();
        echo json_encode($data);
        //Json
    }
}
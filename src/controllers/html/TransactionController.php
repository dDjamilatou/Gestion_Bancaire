<?php
require_once "../src/Models/TransactionModel.php";
class TransactionController{
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
        require_once "../Views/transactions/liste.html.php";
        //Html+Css
    }
}
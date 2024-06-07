<?php
require_once "../src/Models/AgenceModel.php";
class AgenceController{
    private AgenceModel $agenceModel;
    public function __construct(){
        $this->agenceModel = new AgenceModel;
        $this->load();
    }
    public function load(){
        $this->listeCompte();
    }
    private function listeCompte(){
        $data = $this->agenceModel->findAll();
        echo json_encode($data);
        //Json
    }
}
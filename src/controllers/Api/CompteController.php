<?php
require_once "../src/Models/CompteModel.php";
class CompteController{
    private CompteModel $CompteModel;
    public function __construct(){
        $this->compteModel = new CompteModel;
        $this->load();
    }
    public function load(){
        $this->listerDemande();
    }
    private function listerDemande(){
        $data = $this->CompteModel->findAllCompte();
        echo json_encode($data);
        //Json
    }
}
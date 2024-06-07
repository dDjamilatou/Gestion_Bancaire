<?php
require_once "../src/Models/CompteModel.php";
class CompteController{
    private CompteModel $compteModel;
    public function __construct(){
        $this->compteModel = new CompteModel;
        $this->load();
    }
    public function load(){
        $this->listeCompte();
    }
    private function listeCompte(){
        $data = $this->compteModel->findAllCompte();
        require_once "../Views/comptes/liste.html.php";
        //Html+Css
    }
}
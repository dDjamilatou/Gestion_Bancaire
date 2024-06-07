<?php
require_once "../src/Models/AgenceModel.php";
class AgenceController{
    private AgenceModel $agenceModel;
    public function __construct(){
        $this->agenceModel = new AgenceModel;
        $this->load();
    }
    public function load(){
        $this->listeAgence();
    }
    private function listeAgence(){
        $data = $this->agenceModel->findAll();
        require_once "../Views/agences/liste.html.php";
        //Html+Css
    }
}
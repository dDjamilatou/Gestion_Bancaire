<?php
require_once "../src/Models/DemandeModel.php";
class DemandeController{
    private demandeModel $demandeModel;
    public function __construct(){
        $this->demandeModel = new demandeModel;
        $this->load();
    }
    public function load(){
        $this->listerDemande();
    }
    private function listerDemande(){
        $data = $this->demandeModel->findAllWithClient();
        require_once "../Views/demandes/liste.html.php";
        //Html+Css
    }
}
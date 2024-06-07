<?php
require_once "../src/Models/TypeCptModel.php";
class TypeCptController{
    private TypeCptModel $typecptModel;
    public function __construct(){
        $this->typecptModel = new TypeCptModel;
        $this->load();
    }
    public function load(){
        $this->listeType();
    }
    private function listeType(){
        $types = $this->typecptModel->findAll();
        require_once "../Views/typescpt/liste.html.php";
        //Html+Css
    }
}
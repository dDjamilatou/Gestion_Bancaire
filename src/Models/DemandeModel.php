<?php 
require_once "../src/core/Model.php";
class demandeModel extends Model{
    
public function findAllWithClient(){
  $sql="SELECT * FROM `demande` d,`typecpt` t, `users` u WHERE d.`idtc`=t.`idtc` AND d.`idu`=u.`idu` ";
  return $this->executeSelect($sql);
}
    
    
}
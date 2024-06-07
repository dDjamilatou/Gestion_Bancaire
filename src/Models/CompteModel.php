<?php 
require_once "../src/core/Model.php";
class CompteModel extends Model{
    
public function findAllCompte(){
  $sql="SELECT * FROM `Agence` a, `compte` c,`demande` d,`typecpt` t, `users` u
   WHERE c.`idtc`=t.`idtc` AND c.`idu`=u.`idu` AND c.`idd`=d.`idd` AND c.`ida`=a.`ida` ";
  return $this->executeSelect($sql);
}
    
    
}
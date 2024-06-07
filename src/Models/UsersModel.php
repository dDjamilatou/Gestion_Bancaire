<?php 
require_once "../src/core/Model.php";
class UsersModel extends Model{
    
public function findAllUsersByProfil(string $profil){
  $sql="SELECT * FROM `users` u,`profil` p  WHERE  u.`idp`=p.`idp` AND `libp` LIKE '$profil'  ";
  return $this->executeSelect($sql);
}
    
    
}
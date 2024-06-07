<?php 
require_once "../src/core/Model.php";
class TransactionModel extends Model{
    
public function findAllTransaction(){
  $sql="SELECT * FROM `transaction` t, `compte` c, `users` u,`typecpt`ty
   WHERE t.`idu`=u.`idu` AND t.`idc`=c.`idc` AND ty.`idtc`=c.`idtc` ";
  return $this->executeSelect($sql);
}
    
    
}
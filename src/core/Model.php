<?php
abstract class Model{
    
    
    public function findAll():array{
       
        $calledClass=get_called_class();
        // echo $calledClass;
        $table=str_replace("Model","",$calledClass);
        $sql="select* from  $table";
        return $this->executeSelect($sql);
    }

    public function findById(int $id){
       
        $calledClass=get_called_class();
        // echo $calledClass;
        $table=str_replace("Model","",$calledClass);
        $sql="select* from  $table where id=$id ";
        return $this->executeSelect($sql,true);
    }

    protected function executeSelect(string $sql, bool $single=false):array{
        $calledClass=get_called_class();
        $result=$this->openConnexion()->query($sql);
        if(!$single){
              return $result->fetchAll(PDO::FETCH_CLASS,  $calledClass);
        }else{
            return $result->fetch(PDO::FETCH_CLASS,  $calledClass);
            }
         
    }

    protected function openConnexion(){
        return  new PDO(
            'mysql:host=localhost;dbname=gestion_bank;charset=utf8',
            'root',
            ''
        );
    }

    // public function save(){
    //     $SQL_INSERT="insert into $this->table ($this->columns) values ($this->values)";
    //     $result = $this->openConnexion()->exec($SQL_INSERT); 
    // }
}
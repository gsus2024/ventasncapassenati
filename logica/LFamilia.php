<?php
    require_once '../interfaces/IFamilia.php';
    require_once '../datos/DB.php';
    class LFamilia implements IFamilia{
        public function guardar(Familia $familia){
            $db=new DB();
            $cn=$db->conectar();
            $sql="insert into familia (nombre, descripcion) values (:nom, :des)";
            $ps=$cn->prepare($sql);
            $ps->bindParam(':nom', $familia->getNombre());
            $ps->bindParam(':des', $familia->getDescripcion());
            $ps->execute();
        }

        public function cargar(){
            $db=new DB();
            $cn=$db->conectar();
            $sql="select * from familia";
            $ps=$cn->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchAll();
            $familias=array();
            foreach($filas as $f){
                $fam=new Familia();
                $fam->setIdFamilia($f[0]);
                $fam->setNombre($f[1]);
                $fam->setDescripcion($f[2]);
                array_push($familias, $fam);
            }
            return $familias;
        }
    }
?>
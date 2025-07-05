<?php
    require_once '../entidades/Categoria.php';
    interface ICategoria{
        public function guardar($categoria);
        public function cargar();
    }
?>
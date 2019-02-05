<?php
class Usuario_model extends CI_model{

    // creando metodo validar

    function validar($usu,$contra){

        $condicion=array("activo"=>1,
                        "nick"=>$usu,
                        "contra"=>sha1($contra)
                        );
                        //print_r($condicion);
        $this->db->where($condicion);
        //retornar nuestro valor
        $r=$this->db->get("usuario");
        return $r;

        //$this->db->where("activo=1")
    }
}




?>
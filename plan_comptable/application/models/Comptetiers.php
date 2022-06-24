<?php 
    if(! defined('BASEPATH')) exit ('No direct script access allowed');


    class Comptetiers extends CI_Model{

        public function create($idtiers, $idcompte)
        {
            $sql = "INSERT INTO Comptetiers (idtiers,idcompte) VALUES (%s,%s)";
            $sql = sprintf($sql, $this->db->escape($idtiers), $this->db->escape($idcompte));

            $this->db->query($sql);
        }



        
    }
?>
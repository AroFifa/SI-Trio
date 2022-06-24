<?php 
    if(! defined('BASEPATH')) exit ('No direct script access allowed');


    class CaractereCompte extends CI_Model{

        public function create($nb)
        {
            $sql = "INSERT INTO CaractereCompte (nombre) VALUES ($nb)";
            $this->db->query($sql);
        }

        public function read()
        {
            $query = $this->db->query("SELECT * from View_caractereactu");
            $row=$query->row();

            if($row==NULL)
                return 0;
            return $row->nombre;
        }

        
        
    }
?>
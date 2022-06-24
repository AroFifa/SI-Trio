<?php 
    if(! defined('BASEPATH')) exit ('No direct script access allowed');


    class Exercice extends CI_Model{
        public function create($an,$debut,$mois){
            $fin= date('Y-m-d', strtotime("-1 day +$mois months $debut"));
            $sql="INSERT INTO Exercice (annee,debut,fin) VALUES ($an,%s,%s)";
            $sql = sprintf($sql, $this->db->escape($debut), $this->db->escape($fin));

            $this->db->query($sql);
        }

        public function read($q = null)
        {
            $sql = "SELECT * from Exercice order by annee asc";
            if ($q != null) {
                $sql = "SELECT * from Exercice where annee=$q";
            }
            $query = $this->db->query($sql);
            return $query->result_array();
        }


        public function getById($id)
        {
            $query = $this->db->query("SELECT id,annee,to_char( debut, 'DD-MON-YYYY') debut,to_char( fin, 'DD-MON-YYYY') fin from Exercice where id='$id'");
            return $query->row();
        }
    }
?>
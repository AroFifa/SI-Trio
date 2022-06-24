<?php 
    if(! defined('BASEPATH')) exit ('No direct script access allowed');


    class Devise extends CI_Model{

        public function create($idtype,$taux,$idecriture)
        {
            $sql = "INSERT INTO Devise (idtype,taux,idecriture) VALUES (%s,%s,%s)";
            $sql = sprintf($sql, $this->db->escape($idtype), $this->db->escape($taux), $this->db->escape($idecriture));
            // var_dump($sql);
            $this->db->query($sql);
        }
        public function get_default(){

            $query = $this->db->query("SELECT * from TypeDevise where LOWER(nom)='ariary'");
            $row = $query->row();
            return $row->id;
        }
        // public function default_create($idecriture)
        // {
        //     $sql = "INSERT INTO Devise (idtype,taux,idecriture) VALUES (%s,'1',%s)";
        //     $sql = sprintf($sql, $this->db->escape($this->get_default()),$this->db->escape($idecriture));

        //     $this->db->query($sql);
        // }

        // public function ajout_devise($idtype, $taux, $idecriture){
        //     if($idtype==$this->get_default())
        //         $taux=1;

        //     var_dump($taux);
        //     $this->create($idtype,$taux,$idecriture);
        // }


        public function read()
        {
            $sql = "SELECT * from Devise ";
            $query = $this->db->query($sql);
            return $query->result_array();
        }
        public function get_historique($type=null)
        {
            $sql = "SELECT * from HistoriqueDevise";
            if ($type != null) {
                $sql = "SELECT * from HistoriqueDevise where id='$type'";
            }
            $query = $this->db->query($sql);
            return $query->result_array();
        }


        
    }

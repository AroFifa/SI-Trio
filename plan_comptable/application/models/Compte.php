<?php 
    if(! defined('BASEPATH')) exit ('No direct script access allowed');


    class Compte extends CI_Model{

        public function create($num, $title)
        {
            $title=substr($title,0,35);
            $sql = "INSERT INTO Compte (numero,intitule) VALUES (%s,%s)";
            $sql = sprintf($sql, $this->db->escape($num), $this->db->escape($title));

            $this->db->query($sql);
            // var_dump($sql);

        }

        public function insert($id,$num, $title)
        {
            $title=substr($title,0,35);
            $sql = "INSERT INTO Compte (id,numero,intitule) VALUES (%s,%s,%s)";
            $sql = sprintf($sql, $this->db->escape($id), $this->db->escape($num), $this->db->escape($title));

            $this->db->query($sql);

        }

        public function getId($num)
        {
            $sql= "SELECT * from Compte where numero=%s";
            $sql = sprintf($sql, $this->db->escape($num));
            $query = $this->db->query($sql);
            $row = $query->row();
            if($row==NULL)
                return NULL;
            return $row->id;
        }

        public function generate($num,$intitule){
            $idcompte=$this->getId($num);
            if($idcompte==NULL){
                $idcompte=$this->generate_id();
                $this->insert($idcompte,$num,$intitule);
            }

            return $idcompte;
            
        }

        public function generate_id()
        {
            $query = $this->db->query("SELECT nextval('seq_compte')");
            $row = $query->row();
            return $row->nextval;
        }
        public function read($q = null)
        {
            $q=strtolower($q);
            $sql = "SELECT * from Compte order by numero";
            if ($q != null) {
                $sql = "SELECT * from Compte where numero like %s or LOWER(intitule) like %s order by numero";
                $sql = sprintf($sql, $this->db->escape($q.'%'), $this->db->escape('%'.$q.'%'));
            }
            $query = $this->db->query($sql);
            return $query->result_array();
        }
        public function get_tiers()
        {
            $sql = "SELECT * from Compte where numero like '4%' order by numero";
            $query = $this->db->query($sql);
            return $query->result_array();
        }

        public function delete($id){
            $sql="DELETE Compte where id=%s";
            $sql=sprintf($sql,$this->db->escape($id));
            $this->db->query($sql);
        }

        public function update(){

        }

        
    }
?>
<?php 
    if(! defined('BASEPATH')) exit ('No direct script access allowed');


    class Tiers extends CI_Model{

        public function create($id,$num, $nom)
        {
            $sql = "INSERT INTO Tiers (id,numero,nom) VALUES (%s,%s,%s)";
            $sql = sprintf($sql, $this->db->escape($id), $this->db->escape($num), $this->db->escape($nom));

            $this->db->query($sql);
        }

        public function read($q=null)
        {   
            
            $sql= "SELECT * from Tiers order by numero";
            if($q!=null){
                $sql= "SELECT * from Tiers where numero like %s or LOWER(nom) like %s order by numero";
                $sql = sprintf($sql, $this->db->escape($q . '%'), $this->db->escape('%'.$q . '%'));
            }
            $query = $this->db->query($sql);
            return $query->result_array();

        }
        public function get_view($q=null)
        {   
            
            $sql= "SELECT * from View_comptetiers order by numero";
            if($q!=null){
                $sql= "SELECT * from View_comptetiers where identifiant like %s or LOWER(nom) like %s order by numero";
                $sql = sprintf($sql, $this->db->escape($q . '%'), $this->db->escape('%'.$q . '%'));
            }
            $query = $this->db->query($sql);
            return $query->result_array();

        }

        public function generate_id(){
            $query = $this->db->query("SELECT nextval('seq_tiers')");
            $row = $query->row();
            return $row->nextval;
        }


        public function generate($num){
            if($num==""){
                return NULL;
            }
            $idtiers=$this->getId($num);
            if($idtiers==NULL){
                $idtiers=$this->generate_id();
                $this->create($idtiers,$num,$num);    
            }
            return $idtiers;

        }
        public function getId($num)
        {
            if($num=="")
                return NULL;
            $sql = "SELECT * from Tiers where numero=%s";
            $sql = sprintf($sql, $this->db->escape($num));
            
            $query = $this->db->query($sql);
            $row = $query->row();
            if($row==NULL)
                return NULL;
            
            return $row->id;
        }

        public function delete($id)
        {
            $sql = "DELETE Tiers where id=%s";
            $sql = sprintf($sql, $this->db->escape($id));
            $this->db->query($sql);
        }

        public function update()
        {
        }

        
    }

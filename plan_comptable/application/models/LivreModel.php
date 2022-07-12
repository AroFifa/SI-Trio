<?php 
    if(! defined('BASEPATH')) exit ('No direct script access allowed');


    class LivreModel extends CI_Model{

        // public function create($an,$debut,$fin){
        //     $sql="INSERT INTO Exercice (annee,debut,fin) VALUES ($an,%s,%s)";
        //     $sql = sprintf($sql, $this->db->escape($debut), $this->db->escape($fin));

        //     $this->db->query($sql);
        // }

        public function read($idexo,$q = null,$date=null)
        {
            $q=strtolower($q);

            $d="";
            if($date!=null){
                $d=" date<=%s and ";
                $d = sprintf($d, $this->db->escape($date));
            }
            
            $sql = "SELECT * from View_balance where $d idexercice=%s order by numero asc";
            $sql = sprintf($sql, $this->db->escape($idexo));
            
            if ($q != null) {
                $sql = "SELECT * from View_balance where $d  idexercice=%s and (numero like %s or LOWER(intitule) like %s) order by numero";
                $sql = sprintf($sql, $this->db->escape($idexo), $this->db->escape($q.'%'), $this->db->escape('%'.$q.'%'));
            }
            

            $query = $this->db->query($sql);
            return $query->result_array();
        }

        public function read_mouvement($idexo,$num = null)
        {
            $sql = "SELECT * from View_grandlivre where idexo=%s and num_compte like %s order by num_compte asc";
            $sql = sprintf($sql, $this->db->escape($idexo), $this->db->escape($num.'%'));
            $query = $this->db->query($sql);
            return $query->result_array();
        }

        
    }
?>
<?php 
    if(! defined('BASEPATH')) exit ('No direct script access allowed');


    class Journal extends CI_Model{

        public function create($libelle)
        {
            $sql = "INSERT INTO Journal (libelle) VALUES (%s)";
            $sql = sprintf($sql, $this->db->escape($libelle));

            $this->db->query($sql);
        }

        public function read($q = null)
        {
            $q=strtolower($q);
            $sql = "SELECT * from Journal order by libelle";
            if ($q != null) {
                $sql = "SELECT * from Journal where LOWER(libelle)  like %s order by libelle";
                $sql = sprintf($sql, $this->db->escape('%'.$q.'%'));
            }
            $query = $this->db->query($sql);
            return $query->result_array();
        }

        public function getId($libelle)
        {
            $sql = "SELECT * from Journal where libelle=%s";
            $sql = sprintf($sql, $this->db->escape($libelle));
            $query = $this->db->query($sql);
            $row = $query->row();
            return $row->id;
        }
        
    }

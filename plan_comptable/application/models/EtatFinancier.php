<?php 
    if(! defined('BASEPATH')) exit ('No direct script access allowed');


    class EtatFinancier extends CI_Model{

        public function get_sum($idexo,$bilan){
            $this->db->select_sum('montant');
            $data['idexo'] = $idexo;

            $query = $this->db->get_where("view_" . $bilan, $data);
            return $query->row()->montant;
        }
        public function getBilan($idexo,$bilan)
        {
            $data['idexo'] = $idexo;

            $query = $this->db->get_where("view_".$bilan, $data);
            return $query->result_array();
        }



        
    }

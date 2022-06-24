<?php 
    if(! defined('BASEPATH')) exit ('No direct script access allowed');


    class Ecriture extends CI_Model{

        public function insert($idexo,$idjournal,$mois,$refpiece,$date,$num_compte,$intitule_compte,$num_tiers,$libelle,$debit,$credit){

            if ($date == "" || $refpiece == "" || $num_compte == "") {
            } else{
                
                $this->load->model('Compte');
                $this->load->model('Tiers');
                $idcompte=$this->Compte->generate($num_compte,$intitule_compte);
                $idtiers=$this->Tiers->generate($num_tiers);
                $jour= explode("/", $date)[0];
                $debit=floatval(str_replace(",", ".", str_replace(" ", "", $debit)));
                $credit=floatval(str_replace(",", ".", str_replace(" ", "", $credit)));

                    $this->create_incr($idexo,$idjournal,$mois,$refpiece,$jour,$idcompte,$idtiers,$libelle,$debit,$credit);

            }

        }
        public function create_incr($idexo, $idjournal, $mois, $refpiece, $jour, $idcompte, $idtiers, $libelle, $debit, $credit){

            $id = $this->generate_id();
            $this->create($id,$idexo, $idjournal, $mois, $refpiece, $jour, $idcompte, $idtiers, $libelle, $debit, $credit);
        }
        public function create($id,$idexo,$idjournal,$mois,$refpiece,$jour,$idcompte,$idtiers,$libelle,$debit, $credit)
        {
            if($idtiers=="")
                $idtiers=null;
            $sql = "INSERT INTO Ecriture (id,idexercice,idjournal,mois,refpiece,jour,idcompte,idtiers,libelle,debit,credit) 
            VALUES (%s,%s,%s,$mois,%s,$jour,%s,%s,%s,$debit,$credit)";
            $sql = sprintf($sql,$this->db->escape($id),$this->db->escape($idexo),$this->db->escape($idjournal), $this->db->escape($refpiece)
            , $this->db->escape($idcompte), $this->db->escape($idtiers), $this->db->escape($libelle));

            // var_dump($sql);
            $this->db->query($sql);
        }

        public function save($idexo, $idjournal, $mois,$jour, $refpiece,$libelle,$idcompte,$idtiers,$debit,$credit,$devise,$taux){
            $this->load->model('Devise');
            $this->load->model('Compte');
            $this->load->model('Tiers');
            for ($i=0; $i < count($idcompte); $i++) { 
                $id=$this->generate_id();
                $idcompte[$i]=$this->Compte->getId($idcompte[$i]);
                $idtiers[$i]=$this->Tiers->getId($idtiers[$i]);
                if($debit[$i]==null)
                    $debit[$i]=0;
                if($credit[$i]==null)
                    $credit[$i]=0;
                if($taux[$i]==null){
                    $taux[$i]=1;
                    $devise[$i]=$this->Devise->get_default();
                }

                // var_dump($devise[$i]);
                $this->create($id,$idexo,$idjournal,$mois,$refpiece,$jour,$idcompte[$i],$idtiers[$i],$libelle,$debit[$i],$credit[$i]);
                $this->Devise->create($devise[$i],$taux[$i],$id);
            }
        }

        public function read_view($idexo,$idjournal=null,$mois=null)
        {

            $sql = "SELECT * from View_ecriture where idexercice=%s order by mois,jour asc";
            if ($idjournal != null && $mois !=null) {
                $sql = "SELECT * from View_ecriture where idexercice=%s and mois=$mois and idjournal='$idjournal' order by mois,jour asc";
            }else if($idjournal != null && $mois == null){
                $sql = "SELECT * from View_ecriture where idexercice=%s and idjournal='$idjournal' order by mois,jour asc";

            }else if($idjournal == null && $mois != null){
                $sql = "SELECT * from View_ecriture where idexercice=%s and mois=$mois order by mois,jour asc";

            }

            $sql = sprintf($sql, $this->db->escape($idexo));
            // var_dump("\n\n\n\n");
            // var_dump($sql);
            $query = $this->db->query($sql);
            return $query->result_array();
        }

        public function generate_id()
        {
            $query = $this->db->query("SELECT nextval('seq_ecriture')");
            $row = $query->row();
            return $row->nextval;
        }
    }
?>
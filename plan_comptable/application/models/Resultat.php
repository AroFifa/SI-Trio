<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Resultat extends CI_Model{

    public function InsertResultat($idexercice,$idcompte,$mois,$jour,$libelle,$debit = 0,$credit = 0){
        $sql = "INSERT INTO ECRITURE(idexercice,idcompte,mois,jour,libelle,debit,credit) values ($idexercice,$idcompte,$mois,$jour,%s,$debit,$credit) ";
        $sql = sprintf($sql,$this->db->escape($libelle));
        $query = $this->db->query($sql);
    }

    public function getchiffreaffaire($idexercice){
        $query = $this->db->query("SELECT sum(debiteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '70%' ");
        return $query->row()->result;
    }

    public function getproductionstockee($idexercice){
        $query = $this->db->query("SELECT sum(debiteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '71%' ");
        return $query->row()->result;
    }

    // Production de L'exercice
    public function getachatconsommes($idexercice){
        $query = $this->db->query("SELECT sum(crediteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '60%' ");
        return $query->row()->result;
    }
    
    public function getservicesexterieursetautreconsommations($idexercice){
        $query = $this->db->query("SELECT sum(crediteur) as result from v_grand_livre where idexercice = '$idexercice' and (numero like '61%' or numero like '62%') ");
        return $query->row()->result;
    }

    // Consommation de l'exercice
    public function getconsommationexercice($idexercice){
        
    }

    // Valeur Ajoutee d'exploitation
    public function getchargespersonnel($idexercice){
        $query = $this->db->query("SELECT sum(crediteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '64%' ");
        return $query->row()->result;
    }

    public function getimpotstaxes($idexercice){
        $query = $this->db->query("SELECT sum(crediteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '63%' ");
        return $query->row()->result;
    }

    // Excedent brut d'exploitation
    public function getautresproduitoperationels($idexercice){
        $query = $this->db->query("SELECT sum(debiteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '75%' ");
        return $query->row()->result;
    }

    public function getautrechargesoperationels($idexercice){
        $query = $this->db->query("SELECT sum(crediteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '65%' ");
        return $query->row()->result;
    }

    public function getdotationamortissements($idexercice){
        $query = $this->db->query("SELECT sum(crediteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '68%' ");
        return $query->row()->result;
    }

    public function getrepriseprovision($idexercice){
        $query = $this->db->query("SELECT sum(debiteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '78%' ");
        return $query->row()->result;
    }

    // Resultat Operationel
    public function getproduitfinanciers($idexercice){
        $query = $this->db->query("SELECT sum(debiteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '76%' ");
        return $query->row()->result;
    }

    public function getchargesfinancieres($idexercice){
        $query = $this->db->query("SELECT sum(crediteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '66%' ");
        return $query->row()->result;
    }

    // Resultat Financier
    public function getresultatfinancier($idexercice){
        $resultatfinanciers = $this->getproduitfinanciers($idexercice) - $this->getchargesfinancieres($idexercice);
        return $resultatfinanciers;
    }
    // Resultat Avant Impot
    public function getimpotsexigiblessurresultat($idexercice){
        $query = $this->db->query("SELECT sum(crediteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '695%' ");
        return $query->row()->result;
    }

    public function getimpotsdifferes($idexercice){
        $query = $this->db->query("SELECT sum(crediteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '692%' ");
        return $query->row()->result;
    }

    // Total des produits des activites ordinaires
    // Total des charges des activites ordinaires

    // Resultat Net des Activites Ordinaires
    public function getelementsextraordinaireproduits($idexercice){
        $query = $this->db->query("SELECT sum(debiteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '77%' ");
        return $query->row()->result;
    }

    public function getelementsextraordinairecharges($idexercice){
        $query = $this->db->query("SELECT sum(crediteur) as result from v_grand_livre where idexercice = '$idexercice' and numero like '67%' ");
        return $query->row()->result;
    }

    // Resultat Extraordinaire
    public function getresultatextraordinaire($idexercice){
        $resulat = $this->getelementsextraordinaireproduits($idexercice) - $this->getelementsextraordinairecharges($idexercice);
        return $resulat;
    }

    // Resultat Net de L'exercice
    public function getresultatnetexercice($idexercice){

    }


}


?>
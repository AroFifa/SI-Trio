<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EtatFinancierC extends CI_Controller
{
    public function bilan()
    {
        $this->load->model('EtatFinancier');
        $this->load->model('Exercice');



        $data['exo'] = $this->Exercice->getById($this->session->exo);
        $data['model'] = 'etatFinancier';

        $data['actifs_noncourants']=$this->EtatFinancier->getBilan($this->session->exo, 'actifs_noncourants');
        $data['actifs_courants']=$this->EtatFinancier->getBilan($this->session->exo, 'actifs_courants');
        $data['capitaux']=$this->EtatFinancier->getBilan($this->session->exo, 'capitaux');
        $data['passifs_noncourants']=$this->EtatFinancier->getBilan($this->session->exo, 'passifs_noncourants');
        $data['passifs_courants']=$this->EtatFinancier->getBilan($this->session->exo, 'passifs_courants');

        $data['SANC']=$this->EtatFinancier->get_sum($this->session->exo, 'actifs_noncourants');
        $data['SAC']=$this->EtatFinancier->get_sum($this->session->exo, 'actifs_courants');
        $data['SCP']=$this->EtatFinancier->get_sum($this->session->exo, 'capitaux');
        $data['SPNC']=$this->EtatFinancier->get_sum($this->session->exo, 'passifs_noncourants');
        $data['SPC']=$this->EtatFinancier->get_sum($this->session->exo, 'passifs_courants');

        $this->load->view('etatFinancier/bilan', $data);
    }
    
    public function resultat(){
        $this->load->model('Resultat');

        $data['exo'] = $this->session->exo;


        $data['chiffreaffaire'] = $this->Resultat->getchiffreaffaire($this->session->exo);
        $data['productionstockee'] = $this->Resultat->getproductionstockee($this->session->exo);

        $data['achatconsommes'] = $this->Resultat->getachatconsommes($this->session->exo);
        $data['serviceexterieur'] = $this->Resultat->getservicesexterieursetautreconsommations($this->session->exo);

        $data['consommationexercice'] = $this->Resultat->getconsommationexercice($this->session->exo);

        $data['chargespersonnel'] = $this->Resultat->getchargespersonnel($this->session->exo);
        $data['impotstaxes'] = $this->Resultat->getimpotstaxes($this->session->exo);

        $data['autresproduitoperationels'] = $this->Resultat->getautresproduitoperationels($this->session->exo);
        $data['autrechargesoperationels'] = $this->Resultat->getautrechargesoperationels($this->session->exo);
        $data['dotationamortissements'] = $this->Resultat->getdotationamortissements($this->session->exo);
        $data['repriseprovision'] = $this->Resultat->getrepriseprovision($this->session->exo);

        $data['produitfinanciers'] = $this->Resultat->getproduitfinanciers($this->session->exo);
        $data['chargesfinancieres'] = $this->Resultat->getchargesfinancieres($this->session->exo);

        $data['resultatfinancier'] = $this->Resultat->getresultatfinancier($this->session->exo);

        $data['impotsexigiblessurresultat'] = $this->Resultat->getimpotsexigiblessurresultat($this->session->exo);
        $data['impotsdifferes'] = $this->Resultat->getimpotsdifferes($this->session->exo);

        $data['elementsextraordinaireproduits'] = $this->Resultat->getelementsextraordinaireproduits($this->session->exo);
        $data['elementsextraordinairecharges'] = $this->Resultat->getelementsextraordinairecharges($this->session->exo);

        $data['resultatextraordinaire'] = $this->Resultat->getresultatextraordinaire($this->session->exo);

        $data['resultatnetexercice'] = $this->Resultat->getresultatnetexercice($this->session->exo);

        // Load View Resultat
    }
}

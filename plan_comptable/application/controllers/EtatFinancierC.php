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
    }
}

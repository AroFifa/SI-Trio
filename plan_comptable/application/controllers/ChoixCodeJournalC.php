<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ChoixCodeJournalC extends CI_Controller
{
    public function saisie()
    {
        $this->load->model('Exercice');
        $this->load->model('Journal');



        $data['exo'] = $this->Exercice->getById($this->session->exo);
        $data['journal']=$this->Journal->read();
        $data['model'] = 'choix_journal';

        $this->load->view('choix_journal/saisie', $data);
    }
   
}

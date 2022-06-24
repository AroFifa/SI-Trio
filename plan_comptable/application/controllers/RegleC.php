<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegleC extends CI_Controller
{

    public function saisie()
    {

        $this->load->model('CaractereCompte');

        $data['model'] = 'regle';
        $data['contents'] = 'saisie';
        $data['nb']=$this->CaractereCompte->read();

        $this->load->view('Template/template', $data);
    }

    public function ajout_exo(){

        $an = $this->input->post('an');
        $debut = $this->input->post('debut');
        $nbmois = $this->input->post('mois');


        $this->load->model('Exercice');
        $this->Exercice->create($an, $debut,$nbmois);

        redirect('Home/');
    }
    public function ajout_journal(){

        $lib = $this->input->post('libelle');


        $this->load->model('Journal');
        $this->Journal->create($lib);

    }
    public function modif_caractere(){
        $nb=$this->input->post('nb');


        $this->load->model('CaractereCompte');
        
        $this->CaractereCompte->create($nb);


        $this->saisie();
    }
    public function liste()
    {
        $this->load->model('Exercice');
        $this->load->model('Journal');

        $qE = $this->input->get('qE');
        $qJ = $this->input->get('qJ');
        $data['liste_exo']=$this->Exercice->read($qE);
        $data['liste_jour']=$this->Journal->read($qJ);

        $data['model'] = 'regle';
        $data['contents'] = 'liste';

        $this->load->view('Template/template', $data);
    }
}

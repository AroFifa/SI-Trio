<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ComptetiersC extends CI_Controller
{

    public function saisie()
    {
        $this->load->model('Compte');
        
        // $data['compte']=$this->Compte->read();
        $data['compte']=$this->Compte->get_tiers();
        $data['model'] = 'comptetiers';
        $data['contents'] = 'saisie';


        $this->load->view('Template/template', $data);
    }
    public function liste()
    {

        $this->load->model('Tiers');

        $q = $this->input->get('q');
        $data['liste_tiers'] = $this->Tiers->get_view($q);
        $data['model'] = 'comptetiers';
        $data['contents'] = 'liste';

        $this->load->view('Template/template', $data);
    }

    public function ajout_tiers(){


        $num = $this->input->post('num');
        $nom = $this->input->post('nom');
        $compte = $this->input->post('compte');

        // var_dump($compte);

        $this->load->model('Comptetiers');
        $this->load->model('Compte');
        $this->load->model('Tiers');

        $idcompte = $this->Compte->getId($compte);

        $idtiers=$this->Tiers->generate_id();
        $this->Tiers->create($idtiers,$num,$nom);
        $this->Comptetiers->create($idtiers, $idcompte);

        $this->liste();

    }
}

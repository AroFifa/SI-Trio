<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CompteC extends CI_Controller
{

    public function saisie($error='')
    {

        $data['model'] = 'compte';
        $data['contents'] = 'saisie';
        $data['error']=$error;

        $this->load->view('Template/template', $data);


    }

    
    public function liste()
    {


        $this->load->model('Compte');
        $q=$this->input->get('q');
        
        $data['liste_compte'] = $this->Compte->read($q);
        $data['model'] = 'compte';
        $data['contents'] = 'liste';

        $this->load->view('Template/template', $data);


    }

    public function import_compte($file){
        $this->load->model('Csv');
        $this->Csv->import_PCG($file);
        $this->liste();
    }

    public function upload_compte(){

        $this->load->model("File");
        $this->File->do_upload('CompteC/saisie','CompteC/import_compte');

    }

    public function ajout_compte()
    {


        $num = $this->input->post('num');
        $intitule = $this->input->post('title');

        // var_dump($compte);

        $this->load->model('Compte');

        $this->Compte->create($num, $intitule);

        $this->liste();
    }
    
}

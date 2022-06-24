<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EcritureC extends CI_Controller
{

    public function saisie()
    {
        redirect('ChoixCodeJournalC/saisie');
    }

    public function form_saisie(){

        $this->load->model('Exercice');
        $this->load->model('Journal');
        $this->load->model('Compte');
        $this->load->model('Tiers');
        $this->load->model('TypeDevise');



        $data['exo'] = $this->Exercice->getById($this->session->exo);
        $data['code']= $this->input->post('code');
        $data['idjournal'] = $this->Journal->getId($data['code']);
        $data['mois'] = $this->input->post('mois');
        $data['compte'] = $this->Compte->read();
        $data['tiers'] = $this->Tiers->read();
        $data['devise'] = $this->TypeDevise->read();
        $data['journal'] = $this->Journal->read();
        $data['model'] = 'ecriture';
        $data['contents'] = 'saisie';

        $this->load->view('Template/template', $data);
    }
    public function liste()
    {

        $this->load->model('Ecriture');
        $this->load->model('Journal');

        $idexo = $this->session->exo;

        $idj = $this->input->get('journal');
        $mois = $this->input->get('mois');

        $data['model'] = 'ecriture';
        $data['contents'] = 'liste';
        $data['ecriture'] = $this->Ecriture->read_view($idexo,$idj,$mois);
        $data['journal'] = $this->Journal->read();

        $this->load->view('Template/template', $data);
    }

    public function enregistrer($idjournal,$mois)
    {

        $this->load->model('Ecriture');

        $idexo=$this->session->exo;
        // $idjournal= $this->input->post('code');
        // $mois= $this->input->post('mois');

        
        // $idexo='1';
        // $idjournal='1';
        // $mois=1;

        $jour = $this->input->post('jour');
        $refpiece = $this->input->post('refpiece');
        $libelle = $this->input->post('libelle');
        
        $idcompte = $this->input->post('compte');
        $idtiers = $this->input->post('tiers');
        $devise = $this->input->post('devise');
        $taux = $this->input->post('taux');
        // $quantite = $this->input->post('q');
        $debit = $this->input->post('debit');
        $credit = $this->input->post('credit');

        $this->Ecriture->save($idexo, $idjournal, $mois, $jour, $refpiece, $libelle, $idcompte, $idtiers, $debit, $credit, $devise, $taux);
        $this->liste();

    }

    public function import_ecriture($file, $idjournal, $mois)
    {
        $this->load->model('Csv');

        $idexo = $this->session->exo;


        $this->Csv->import_ecriture($file,$idexo,$idjournal,$mois);
        $this->liste();
    }

    public function upload_ecriture($idjournal,$mois)
    {

        $this->load->model("File");
        $this->File->do_upload_ecriture('ecritureC/form_saisie', 'ecritureC/import_ecriture',$idjournal,$mois);
    }
}

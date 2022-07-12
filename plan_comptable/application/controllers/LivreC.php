<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LivreC extends CI_Controller
{

    public function liste()
    {

        $this->load->model('LivreModel');

        $idexo = $this->session->exo;

        $data['livres']=$this->LivreModel->read($idexo,$this->input->get("q"), $this->input->get("date"));

        $data['model'] = 'livre';
        $data['contents'] = 'liste';

        $this->load->view('livre/liste', $data);
    }

    public function liste_mouvement()
    {

        $this->load->model('LivreModel');

        $idexo = $this->session->exo;

        $data['mouvements']=$this->LivreModel->read_mouvement($idexo,$this->input->get("num"));

        $data['model'] = 'livre';
        $data['contents'] = 'mouvement';

        $this->load->view('livre/mouvement', $data);
    }
}
?>
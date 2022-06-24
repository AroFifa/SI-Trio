<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function login()
    {
        $exo=$this->input->post('exercice');
        $this->session->set_userdata('exo', $exo);
        $this->welcome();
    }

    public function welcome(){
        $this->load->model('Exercice');

        $data['exo']= $this->Exercice->getById($this->session->exo);

        // var_dump($data['exo']);
        $this->load->view('Home/home',$data);

    }

    public function index()
    {
        $this->load->model('Exercice');
        $data['exo']=$this->Exercice->read();
        $this->load->view('Home/exercice',$data);
    }
}

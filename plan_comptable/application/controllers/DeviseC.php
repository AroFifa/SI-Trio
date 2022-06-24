<?php 

class DeviseC extends CI_Controller{

    public function liste(){
        $this->load->model('TypeDevise');
        $this->load->model('Devise');

        $data['typedevise'] = $this->TypeDevise->read();
        $data['historique'] = $this->Devise->get_historique($this->input->get('devise'));
        $data['model'] = 'Devise';
        $data['contents'] = 'liste';
        $data['error'] = '';

        $this->load->view('Template/template',$data);
    }

    public function saisie(){

        // $this->load->model('TypeDevise');

        // $data['model'] = 'Devise';
        // $data['historique_devise'] = $this->Devise->read();
        // $data['contents'] = 'historique';
        // $data['error'] = 'error';

        // $this->load->view('Template/template',$data);
    }

}

?>
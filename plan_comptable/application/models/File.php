<?php 
    if(! defined('BASEPATH')) exit ('No direct script access allowed');


    class File extends CI_Model{

    public function do_upload($error_path, $successpath)
    {

        $config['upload_path'] = './';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = 100;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('csv')) {
            $error = $this->upload->display_errors();
            redirect(site_url($error_path . '/' . $error));
        } else {
            $file = $this->upload->data();

            // var_dump($file);
            $file = $file["file_name"];
            redirect(site_url($successpath . '/' . $file));
        }
    }
    public function do_upload_ecriture($error_path, $successpath,$idjournal,$mois)
    {

        $config['upload_path'] = './';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = 100;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('csv')) {
            $error = $this->upload->display_errors();
            redirect(site_url($error_path . '/' . $error));
        } else {
            $file = $this->upload->data();

            // var_dump($file);
            $file = $file["file_name"];
            redirect(site_url($successpath . '/' . $file.'/'.$idjournal.'/'.$mois));
        }
    }
    }
?>
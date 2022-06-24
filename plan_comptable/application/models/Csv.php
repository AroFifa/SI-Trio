<?php 
    if(! defined('BASEPATH')) exit ('No direct script access allowed');


    class Csv extends CI_Model{

    public function import_PCG($file)
    {

        $this->load->model("Compte");

        $fp = fopen($file, "r");

        // getting the data from file
        fgetcsv($fp, 1000, ";");
        while (($line = fgetcsv($fp, 1000, ";"))) {
            // foreach ($line as $key => $value) {
            //     echo $key; echo " ---- "; echo $value;
            // }
            // tokony dinganiko ny ligne 1
            $this->Compte->create($line[0], $line[1]);
        }
    }
    public function import_ecriture($file,$idexo,$idjournal,$mois)
    {

        $this->load->model("Ecriture");

        $fp = fopen($file, "r");

        fgetcsv($fp, 1000, ";");
        
        // var_dump("\n\n\n\n\n");
        // var_dump($idexo);
        // var_dump($idjournal);
        // var_dump($mois);
        while (($line = fgetcsv($fp, 1000, ";"))) {
            // var_dump($line[0]);
            // var_dump($line[6]);
            // var_dump($line[7]);

            // $line[0]=explode("/",$line[0])[0];

            // // echo "J: "; echo $line[0];


            // echo "\n";

            // echo "C: "; echo floatval(str_replace(",",".",str_replace(" ","", $line[7])));
            $this->Ecriture->insert($idexo, $idjournal, $mois, $line[1], $line[0], $line[2], $line[4], $line[3], $line[5], $line[6], $line[7]);
        }
    }
    }
?>
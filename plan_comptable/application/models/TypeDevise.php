<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


class TypeDevise extends CI_Model
{

    public function create($nom)
    {
        $sql = "INSERT INTO TypeDevise (nom) VALUES (%s)";
        $sql = sprintf($sql, $this->db->escape($nom));

        $this->db->query($sql);
    }

    public function read()
    {
        $sql = "SELECT * from TypeDevise order by nom";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}

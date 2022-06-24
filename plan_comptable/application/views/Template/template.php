<?php
    $this->load->view("Template/header");
    $this->load->view($model."/".$contents);
    $this->load->view("Template/footer");
?>
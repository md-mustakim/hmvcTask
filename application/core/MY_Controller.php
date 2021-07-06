<?php

class MY_Controller extends MX_Controller{
    public function __construct()
    {
        parent::__construct();

        $this->load->module("school");
        $this->load->module("product");
        $this->load->module("template");
        $this->load->helper("url");
    }
}
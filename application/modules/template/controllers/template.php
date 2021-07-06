<?php

class template extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function loadTemplate($page_content = "")
    {
        $this->load->view("template/global_template", compact($page_content));
    }
}
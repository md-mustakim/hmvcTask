<?php

class template extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function loadTemplate($page_content = "", $view_data = "", $script = "")
    {
        $data['view_name'] = $page_content;
        $data['view_data'] = $view_data;
        $data['script'] = $script;
        $this->load->view("template/global_template", $data);
    }
}
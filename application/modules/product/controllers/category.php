<?php

class category extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }



    public function index(){

        $myViewPath = "product/create";
        $jsFilePath = "product/js";
        $this->template->loadTemplate($myViewPath, "", $jsFilePath);
    }

    public function store()
    {
        $name = $this->input->post("name");
        echo json_encode(array(
            'status' => true,
            'message' => 'Create Success '.$name
        ));
    }
}
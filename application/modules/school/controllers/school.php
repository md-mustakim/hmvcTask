<?php

class school extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_school_name(){
        echo "<h4>K V No 1</h4>";
    }

    public function get_school_address(){
        echo "<h4>xyz sample location somewhere city</h4>";
    }
}
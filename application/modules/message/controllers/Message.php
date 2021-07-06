<?php
class Message extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        echo "<h3>This is simple message for message module</h3>";
    }
    public function show()
    {
        echo "<h3>This is simple message for message show............ done</h3>";
        $this->school->get_school_name();
    }
}
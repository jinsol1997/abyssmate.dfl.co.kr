<?php


class Sub extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $view           = $this->common->checkMobile() == "M" ? "/mobile/sub" : "/pc/sub";
        $this->load->view($view);
    }

}

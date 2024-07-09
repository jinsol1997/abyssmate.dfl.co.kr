<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function loginView()
    {
        $this->load->view("/admin/login");
    }

    function login()
    {
        $id                     = $this->input->post("id");
        $pw                     = $this->input->post("pw");

        $json["status"]         = "error";

        if($id == 'test' && $pw == '1234'){
            $this->session->set_userdata("is_login", true);
            $json["status"]     = "success";
        }

        echo json_encode($json);
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect("/admin/Auth/loginView");
    }
}
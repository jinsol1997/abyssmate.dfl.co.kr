<?php


class Main extends CI_Controller
{   

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_main");
//        $this->data             = json_decode(file_get_contents("php://input"), true);

//        $this->data["device"]       = $this->common->checkMobile();
        $this->data["device"]               = $this->agent->is_mobile() ? "M" : "P";

        $this->data["app"]                  = $this->input->get_post("app") ?? "";
        $this->data["phone"]                = $this->input->get_post("phone") ?? "";
        $this->data["ipt1"]                 = $this->input->get_post("ipt1") ?? "";
        $this->data["ipt2"]                 = $this->input->get_post("ipt2") ?? "";
        $this->data["ad_agreement"]         = $this->input->get_post("ad_agreement") ?? "";
    }

    function index()
    {
//        $view = $this->data["device"] == "M" ? "/mobile/index" : "/index";
        $view                               = $this->agent->is_mobile() ? "/mobile/index" : "/pc/index";
        $this->load->view($view);
    }

    function register()
    {

        $data["device"]                     = $this->data["device"];
        $data["app"]                        = $this->data["app"];
        $data["phone"]                      = $this->data["phone"];
//        $data["ipt1"]               = $this->data["ipt1"] == "true" ? 1 : 0;
//        $data["ipt2"]               = $this->data["ipt2"] == "true" ? 1 : 0;
        $data["ad_agreement"]               = $this->data["ad_agreement"] == "true" ? 1 : 0;
        $data["ip_address"]                 = $this->common->getRealIpAddr();
        $data["reg_date"]                   = date("Y-m-d H:i:s");

        $pattern                            = "/^010\d{8}$/";
        $pattern2                           = '/010(\d)\1{7}/';

        switch(!empty($data)){

            case $data["app"] != "google" && $data["app"] != "apple" :
                $json["status"]             = "app_error";
                break;

            case !preg_match($pattern, $data["phone"]) :
            case preg_match($pattern2, $data["phone"]) :
                $json["status"]             = "phone_error";
                break;

//            case $data["ipt1"] + $data["ipt2"] < 2 :
//                $json["status"]         = "ipt_error";
//                break;

            default :

                try{
                    $count                  = $this->M_main->getCountByPhone($data["phone"]);
                    if($count > 0){
                        $json["status"]     = "duplicate_error";
                    } else {
                        $json["status"]     = $this->M_main->insert($data) ? "success" : "db_error";
                    }
                } catch(Exception $e){
                    $json["status"]         = "server_error";
                }

        }

        echo json_encode($json);

//        if($data["app"] != "google" && $data["app"] != "apple"){
//            $json["status"]         = "app_error";
//        } else if(!preg_match($pattern, $data["phone"])) {
//            $json["status"]         = "phone_error";
//        } else if($this->M_main->getCountByPhone($data["phone"]) > 0){
//            $json["status"]         = "duplicate_error";
//        } else {
//
//            try {
//                $json["status"]     = $this->M_main->insert($data) ? "success" : "db_error";
//            }
//            catch (Exception $e){
//                $json["status"]     = "server_error";
//            }
//
//        }
//        echo json_encode($json);
    }

}

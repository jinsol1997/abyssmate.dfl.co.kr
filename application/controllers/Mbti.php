<?php


class Mbti extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->data["list"]                     = $this->input->get_post('list');
        $this->load->model("M_mbti");
    }

    function index()
    {
        $view                                   = $this->agent->is_mobile() ? "/mobile/mbti" : "/pc/mbti";
        $this->load->view($view);
    }

    function register()
    {
        $list                                   = $this->data["list"];
        $json["status"]                         = "error";

        $count                                  = array_count_values($list);

        $element                                = ['e', 'i', 'n', 's', 'f', 't', 'j', 'p'];
        foreach ($element as $e) {
            if (!isset($count[$e])) {
                $count[$e]                      = 0;
            }
        }
//
//        if($count["e"] + $count["i"] != 3 || $count["n"] + $count["s"] != 3 || $count["f"] + $count["t"] != 3 || $count["j"] + $count["p"] != 3) {
//            $json["status"]                     = "count_error2";
//            echo json_encode($json);
//            return;
//        }
//
//        $result_count                           = $count["e"]
//                                                    + $count["i"]
//                                                    + $count["n"]
//                                                    + $count["s"]
//                                                    + $count["f"]
//                                                    + $count["t"]
//                                                    + $count["j"]
//                                                    + $count["p"];

        if($count["e"] + $count["i"] != 3 || $count["n"] + $count["s"] != 3 || $count["f"] + $count["t"] != 3 || $count["j"] + $count["p"] != 3){

            $mbti1                              = $count["e"] > $count["i"] ? 'e' : 'i';
            $mbti2                              = $count["n"] > $count["s"] ? 'n' : 's';
            $mbti3                              = $count["f"] > $count["t"] ? 'f' : 't';
            $mbti4                              = $count["j"] > $count["p"] ? 'j' : 'p';
            $mbti                               = $mbti1 . $mbti2 . $mbti3 . $mbti4;

            $reg_date                           = date("Y-m-d H:i:s");

            try {
                $result                         = $this->M_mbti->insert($mbti, $list, $reg_date);

                if($result == 1){
                    $json["status"]             = "success";
                    $json["mbti"]               = $mbti;
                } else {
                    $json["status"] = "insert_error";
                }

            } catch(Exception $e) {
                $json["status"]                 = "db_error";
            }

        }else {
            $json["status"]                     = "count_error";
        }

        echo json_encode($json);
    }

}

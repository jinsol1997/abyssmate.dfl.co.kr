<?php

class M_main extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function insert($data) {
        $query      = "insert into pre (device, app, phone, ip_address, ad_agreement, reg_date) values(?,?,?,?,?,?)";

        $params     = [
            $data["device"],
            $data["app"],
            $data["phone"],
            $data["ip_address"],
            $data["ad_agreement"],
            $data["reg_date"],
            ];

        return $this->db->query($query, $params);
    }

    function getCountByPhone($phone){
        $query      = "select count(*) as count from pre where phone = ?";
        $result     = $this->db->query($query, $phone)->row_array();

        return $result["count"];
    }

}
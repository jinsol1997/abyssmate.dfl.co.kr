<?php

class M_main extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function getTotalCount(){
        $query              = "select count(idx) as count from pre";
        $result             = $this->db->query($query)->row_array();
        return $result["count"];
    }

    function getTotalMbtiCount()
    {
        $query              = "select count(idx) as count from mbti";
        $result             = $this->db->query($query)->row_array();
        return $result["count"];
    }

    function getSearchCount(){
        if( $this->data['search_phone'] != "" ){
            $this->db->where('phone', $this->data['search_phone']);
        }
        if( $this->data['start_date'] != "" ){
            $this->db->where("reg_date >= '". $this->data['start_date'] . " 00:00:00'");
        }
        if( $this->data['end_date'] != "" ){
            $this->db->where("reg_date <= '". $this->data['end_date'] . " 23:59:59'");
        }
        $this->db->order_by("idx", "desc");
        $this->db->from("pre");
        return $this->db->count_all_results();
    }

    function getSearchMbtiCount(){
        if( $this->data['mbti'] != "" ){
            $this->db->where("mbti LIKE '%".$this->data['mbti']."%'");
        }
        if( $this->data['start_date'] != "" ){
            $this->db->where("reg_date >= '". $this->data['start_date'] . " 00:00:00'");
        }
        if( $this->data['end_date'] != "" ){
            $this->db->where("reg_date <= '". $this->data['end_date'] . " 23:59:59'");
        }
        $this->db->order_by("idx", "desc");
        $this->db->from("mbti");
        return $this->db->count_all_results();
    }

    function getPagingList(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset   = 0;
        } else {
            $this->offset   = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit        = $this->data['size'];

        if( $this->data['search_phone'] != "" ){
            $this->db->where('phone', $this->data['search_phone']);
        }
        if( $this->data['start_date'] != "" ){
            $this->db->where("reg_date >= '". $this->data['start_date'] . " 00:00:00'");
        }
        if( $this->data['end_date'] != "" ){
            $this->db->where("reg_date <= '". $this->data['end_date'] . " 23:59:59'");
        }
        $this->db->order_by("idx", "desc");
        return $this->db->get("pre", $this->limit , $this->offset)->result_array();
    }

    function getMbtiPagingList(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset   = 0;
        } else {
            $this->offset   = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit        = $this->data['size'];

        if( $this->data['mbti'] != "" ){
            $this->db->where("mbti LIKE '%".$this->data['mbti']."%'");
        }
        if( $this->data['start_date'] != "" ){
            $this->db->where("reg_date >= '". $this->data['start_date'] . " 00:00:00'");
        }
        if( $this->data['end_date'] != "" ){
            $this->db->where("reg_date <= '". $this->data['end_date'] . " 23:59:59'");
        }
        $this->db->order_by("idx", "desc");
        return $this->db->get("mbti", $this->limit , $this->offset)->result_array();
    }

    function getList(){
        if( $this->data['search_phone'] != "" ){
            $this->db->where('phone', $this->data['search_phone']);
        }
        if( $this->data['start_date'] != "" ){
            $this->db->where("reg_date >= '". $this->data['start_date'] . " 00:00:00'");
        }
        if( $this->data['end_date'] != "" ){
            $this->db->where("reg_date <= '". $this->data['end_date'] . " 23:59:59'");
        }
        $this->db->order_by("idx", "desc");
        return $this->db->get("pre")->result_array();
    }

    function getMbtiList(){
        if( $this->data['mbti'] != "" ){
            $this->db->where("mbti LIKE '%".$this->data['mbti']."%'");
        }
        if( $this->data['start_date'] != "" ){
            $this->db->where("reg_date >= '". $this->data['start_date'] . " 00:00:00'");
        }
        if( $this->data['end_date'] != "" ){
            $this->db->where("reg_date <= '". $this->data['end_date'] . " 23:59:59'");
        }
        $this->db->order_by("idx", "desc");
        return $this->db->get("mbti")->result_array();
    }
}
<?php

class M_mbti extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function insert($mbti, $list, $reg_date)
    {

        $query      = "INSERT INTO mbti (mbti, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, reg_date) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $params     = array_merge([$mbti], $list, [$reg_date]);

        return $this->db->query($query, $params);
    }
}
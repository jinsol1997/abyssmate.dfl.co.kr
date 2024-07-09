<?php

class Main extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('is_login') == ""){
            redirect('/admin/Auth/loginView');
        }

        $this->load->library('paging');
        $this->load->model('admin/M_main');
        $this->data['search_phone']         = $this->input->get_post('search_phone') ? $this->input->get_post('search_phone') : "";
        $this->data['start_date']           = $this->input->get_post('start_date') ? $this->input->get_post('start_date') : "";
        $this->data['end_date']             = $this->input->get_post('end_date') ? $this->input->get_post('end_date') : "";
        $this->data['page']                 = $this->input->get_post('page') ? $this->input->get_post('page') : 1;
        $this->data['size']                 = $this->input->get_post('size') ? $this->input->get_post('size') : 20;
        $this->data['base_url']             = current_url() . "?search_phone=" . $this->data['search_phone'] . "&start_date=" . $this->data['start_date']. "&end_date=" . $this->data['end_date'];
        $this->data['cur_page']             = $this->data['page'];

        $this->data["mbti"]                 = $this->input->get_post('mbti') ?? "";
    }

    function index(){
        $this->data['total_cnt']            = $this->M_main->getTotalCount();
        $this->data['tot_row']              = $this->M_main->getSearchCount();
        $this->data['tot_page'] 	        = ceil($this->data['tot_row']  /  $this->data['size'] );
        $this->data['cur_num']              = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page'] - 1);
        $this->data['result']               = $this->M_main->getPagingList();
        $this->paging->init($this->data);
        $this->data['paging']               = $this->paging->createPaging();

        $this->load->view('admin/header');
        $this->load->view('admin/index', $this->data);
        $this->load->view('admin/footer');
    }

    function mbti(){

        $this->data['total_cnt']            = $this->M_main->getTotalMbtiCount();
        $this->data['tot_row']              = $this->M_main->getSearchMbtiCount();
        $this->data['tot_page'] 	        = ceil($this->data['tot_row']  /  $this->data['size'] );
        $this->data['cur_num']              = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page'] - 1);
        $this->data['result']               = $this->M_main->getMbtiPagingList();
        $this->paging->init($this->data);
        $this->data['paging']               = $this->paging->createPaging();

        $this->load->view('admin/header');
        $this->load->view('admin/mbti', $this->data);
        $this->load->view('admin/footer');
    }

    function eventXls(){

        $this->data["search_data"]          = $this->input->get_post('search_data') ?? "";

        ini_set('memory_limit', '-1');
        header("Content-type: application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename = reserve_list.xls");
        header("Content-Description: PHP7 Generated Data");

        if($this->data["search_data"] == "mbti"){
            $this->data['total_cnt']        = $this->M_main->getTotalMbtiCount();
            $this->data['tot_row']          = $this->M_main->getSearchMbtiCount();
            $this->data['result']           = $this->M_main->getMbtiList();

            $this->load->view('admin/mbti_event_xls', $this->data);
        }else{
            $this->data['total_cnt']        = $this->M_main->getTotalCount();
            $this->data['tot_row']          = $this->M_main->getSearchCount();
            $this->data['result']           = $this->M_main->getList();

            $this->load->view('admin/event_xls', $this->data);
        }

    }



}
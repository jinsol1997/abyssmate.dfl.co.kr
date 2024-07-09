<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common {
    function __construct() {
        $this->CI=& get_instance();
    }

    // IP
    function getRealIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP']) && getenv('HTTP_CLIENT_IP')){
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']) && getenv('HTTP_X_FORWARDED_FOR')){
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        elseif(!empty($_SERVER['REMOTE_HOST']) && getenv('REMOTE_HOST')){
            return $_SERVER['REMOTE_HOST'];
        }
        elseif(!empty($_SERVER['REMOTE_ADDR']) && getenv('REMOTE_ADDR')){
            return $_SERVER['REMOTE_ADDR'];
        }
        return false;
    }

    //모바일 여부 체크
    function checkMobile(){
        $http_user_agent    = strtolower($_SERVER['HTTP_USER_AGENT']);
        $device             = 'P';
        $mobileArray        = array("lg","iphone","lgtelecom","skt","mobile","samsung","nokia","blackberry","android","android","sony","phone",
            "LG","IPHONE","LGTELECOM","SKT","MOBILE","SAMSUNG","NOKIA","BLACKBERRY","ANDROID","ANDROID","SONY","PHONE","ipad");
        for( $i = 0; $i < sizeof($mobileArray); $i++){
            if(strpos($http_user_agent, $mobileArray[$i])) {
                $device     = 'M';
            }
        }

        if( $this->CI->agent->is_mobile() ){
            $device     = 'M';
        }
        return $device;
    }




}
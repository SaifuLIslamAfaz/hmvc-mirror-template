<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Registration extends MX_Controller {
    protected $user_login_id;
    
    function __construct() {
        parent::__construct();
        

    }

    public function index()
    {
        
    	    $this->load->view('registration');
    }

}
?>
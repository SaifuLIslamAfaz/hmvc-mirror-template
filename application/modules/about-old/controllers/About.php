<?php
class About extends MX_Controller
{
    function __construct()
    {
        parent::__construct(); 
		//$this->load->model("reg_model");
    }

	public  function index()
    {

		//echo "yes reg"; die; 
		$this->load->view('about');
    }
 


}

?>
<?php
 
 Class Maincontroller extends CI_Controller{

 	public function _constructor(){

 		parent::_constructor();
 	}
 	public function index(){
 		$this->load->view('index');
 	}
 }
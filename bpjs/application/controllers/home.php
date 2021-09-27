<?php
class home extends CI_controller{
	public $model = NULL;
	
	public function __construct(){
		parent::__construct();
		//memuat model
	$this->load->model('home_model');
	$this->model =$this->home_model;
	
	//memuat librari database
	$this->load->database();
	}
public function index() {
		$rows=$this->model->home();
		$this->template->load('template','home_view', ['rows'=>$rows]);
	}
}
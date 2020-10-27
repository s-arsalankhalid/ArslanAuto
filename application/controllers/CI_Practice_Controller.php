<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CI_Practice_Controller extends AA_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    // echo $this->class;
    $data = array();
    $data ["title"] = "working";
    $data ["title1"] []= "workingdfgsgdfgs";
    


    $this->load->view('cutpump_practice', $data);
    // $data = $this->list_user();
    // $this->print_arr($data);
		// $this->load->view('ci_form_helper_practice');
		$this->load->view('ci_html_helper_practice');
    $this->load->view('cutpump_practice', $data);
    "<pre>". print_r($data)."</pre>";
  }

//   $class = 'arslan';

  function model($name){
		if(empty($name)) return "";

		$this->CI->load->model($name);
	}

  
  public function formHelper(){
    print_r($_POST);
  }

  public function list_user() {
    $data = array();
    $data [] = "users";
    $data ['checking2'] []= "users/views";
    return $data;
  }

  function print_arr($arr){
		echo '<pre>'; print_r($arr); echo '</pre>';
	}


}

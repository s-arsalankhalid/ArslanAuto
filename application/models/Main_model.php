<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

  public function login(){
    if(isset($_POST['login_btn'])){
      $email = $_POST['login_email'];
      $psw = $_POST['login_psw'];
      if(!empty($email) && !empty($psw)){
        $ep = $email.$psw;
      }
    }
    return $ep;
  }
}
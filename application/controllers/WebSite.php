<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 *
 * @extends CI_Controllercvvmm,,mn
 */
class  WebSite extends CI_Controller {

  public function __construct() {

	parent::__construct();
	$this->load->helper(array('url'));
    //$this->load->model('general_model');
    //$data = ['name' => 'generateToken','param' => ['user' => 'LATINOSAC', 'password' => '19032018@LATINO']];

  }
  public function Index(){
    $this->load->library('session');
    //$datos["nomusuario"] = $this->session->userdata('username');
    //
    //$Data['Titulo'] = $Titulo;
    //$Controlador = $this->router->fetch_class();
    //$Accion = $this->router->fetch_method();
    //
    //$Vista = $Controlador . '/' . $Accion;
    // Actualiza Ultima Vista
    // $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);
    //
    
    $nombreusuario = $_SESSION['username'];
    /***** desarrollo *****/
    if(empty($nombreusuario)){
      $this->load->view('/header');
      $this->load->view('/user/login/login.php');
    }else{
      $this->load->view('/layout_principal');
      $this->load->view('/WebSite/Index');
    }
  }
  
}

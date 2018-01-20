<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['title']="Incio";
        $this->load->view('templates/header',$data);
        $this->load->view('inicio');
        $this->load->view('templates/footer');
    }
}
?>
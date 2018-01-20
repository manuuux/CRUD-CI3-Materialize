<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('crud_model');
    }
    function nuevo()
	{
        $data['title']="Crear Nuevo";
		$this->load->view('templates/header',$data);
        $this->load->view('crud/formulario');
		$this->load->view('templates/footer');
    }
    function insert(){
        $data = array(
            'nick' => $this->input->post('nick'),
            'email' => $this->input->post('email'),
            'fono' => $this->input->post('fono')
        );
        $this->crud_model->crearUsuario($data);
        redirect(base_url()."crud/lista/c");
    }
    function lista(){
        $title['title']="Listar Usuarios";
		$this->load->view('templates/header',$title);
        $data['usuarios'] = $this->crud_model->listarUsuarios();
        $alert['state']=$this->uri->segment(3);
        $this->load->view('crud/lista',$data);
		$this->load->view('templates/footer',$alert);
    }
    function editar(){
        $data['id'] = $this->uri->segment(3);
        $data['usuario'] = $this->crud_model->obtenerUsuario($data['id']);
		$title['title']="Editar Usuario";
		$this->load->view('templates/header',$title);
        $this->load->view('crud/editar',$data);
		$this->load->view('templates/footer');
    }
    function update(){
        $data = array(
            'nick' => $this->input->post('nick'),
            'email' => $this->input->post('email'),
            'fono' => $this->input->post('fono')
        );
        $this->crud_model->actualizarUsuario($this->uri->segment(3),$data);
        redirect(base_url()."crud/lista/e");
    }
    function ver(){
        $data['id'] = $this->uri->segment(3);
        $data['usuario'] = $this->crud_model->obtenerUsuario($data['id']);
		$title['title']="Ver Usuario";
		$this->load->view('templates/header',$title);
        $this->load->view('crud/ver',$data);
		$this->load->view('templates/footer');
    }
    function borrar(){
        $id = $this->uri->segment(3);
        $this->crud_model->eliminarUsuario($id);
        redirect(base_url()."crud/lista/b");
    }

}
?>
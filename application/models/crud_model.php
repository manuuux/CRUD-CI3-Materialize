<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class crud_model extends CI_Model {
    function __construct(){
        parent::__construct();
        //$this->load->database();
    }
    function crearUsuario($data){
        $this->db->insert(
            'usuarios',
            array(
                'nickUsuario'=>$data['nick'],
                'emailUsuario'=>$data['email'],
                'fonoUsuario'=>$data['fono']
            )
        );
    }
    function listarUsuarios(){
        $query = $this->db->get('usuarios');
        if ($query->num_rows()>0) return $query;
        else return false;
    }
    function obtenerUsuario($id){
        $this->db->where('idUsuario',$id);
        $query = $this->db->get('usuarios');
        if ($query->num_rows()>0) return $query;
        else return false;
    }
    function actualizarUsuario($id,$data){
        $datos=array(
            'nickUsuario'=>$data['nick'],
            'emailUsuario'=>$data['email'],
            'fonoUsuario'=>$data['fono']
        );
        $this->db->where('idUsuario',$id);
        $query = $this->db->update('usuarios',$datos);
    }
    function eliminarUsuario($id){
        $this->db->delete('usuarios',array('idUsuario'=>$id));

    }
 
}
?>
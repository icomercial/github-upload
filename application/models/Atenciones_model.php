<?php
Class Atenciones_model extends CI_Model {
    public $data;
    public function __construct()
        {
                $this->load->database();
        }
        public function get_atenciones($data){
            $this->db->select("*");
            $this->db->from("atencionAlumno");
            $where = "rutatencion =\"".$data."\"";
            $this->db->where($where);
            $this->db->order_by("fecha DESC");
            $query = $this->db->get();
            return $query->result();
        }
        public function set_comentario()
        {
            $data = array(
                'idatencion' => NULL,                
                'rutatencion' => $this->input->post("Alum"),
                'usuario' => $this->input->post("Login"),                
                'comentario' => $this->input->post("ingresaComentario")
            );        
            return $this->db->insert('atencionAlumno', $data);
        }
        public function get_lastatenciones(){
            $this->db->select("*");
            $this->db->from("atencionAlumno");
            $this->db->order_by("fecha DESC");
            $this->db->limit("3");
            $query = $this->db->get();
            return $query->result();
        }
    }
    ?>
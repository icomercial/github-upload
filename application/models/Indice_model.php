<?php
Class Indice_model extends CI_Model {
    public $data;
    public function __construct()
        {
                $this->load->database();
                $this->minisabanaTable = "miniSabana20191";
                $this->indiceTable = "indice20191";
                $this->inscritosTable = "inscritos11032019";
        }
    public function get_cumples(){        
        $this->db->select('*');
        $where = "day(Fnac)=day(now()) and month(Fnac)=month(now()) and Codigo like \"144%\"";
        $this->db->where($where);
        //$this->db->order_by('HorInic', 'ASC');
        $query = $this->db->get($this->indiceTable);
        return $query->result();
    }
public function get_inscripciones($data){
    $this->db->select("distinct(".$this->inscritosTable.".SecInscri), ".$this->minisabanaTable.".Docente, ".$this->minisabanaTable.".IdDocente, ".$this->minisabanaTable.".Asignatura, RutInscri");
    $this->db->from($this->inscritosTable);
    $this->db->join($this->minisabanaTable,$this->inscritosTable.".SecInscri=".$this->minisabanaTable.".Seccion","inner");
    $where = "RutInscri = '" . $data . "' and DescInscri=\"inscritos\"";
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
}
public function get_contacto($data){
    $this->db->select("Usuario, Email, Telefono, Celular, Calle, Numero, Comuna");
    $this->db->from($this->indiceTable);
    $where = "Rut = \"" . $data . "\"";
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
}
public function get_nombre($data){
    $this->db->select("Nombres, ApellidoP, ApellidoM, NombreCarrera, Codigo, Jornada, Fnac, AnioIngreso");
    $this->db->from($this->indiceTable);
    $where = "Rut = \"" . $data . "\"";
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
}
public function get_rut($data){
    $this->db->select("Rut");
    $this->db->from($this->indiceTable);
    $where = "Usuario = \"" . $data . "\"";
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
}
    }
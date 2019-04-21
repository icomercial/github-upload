<?php
Class Minisabana_model extends CI_Model {
    public $data;
    public function __construct()
        {
                $this->load->database();
                $this->minisabanaTable = "miniSabana20191";
                $this->indiceTable = "indice20191";
                $this->inscritosTable = "inscritos11032019";
                $this->ramosTable = "ramos_it20191";
        }
    public function get_actual_clases($data){
        $this->db->select('*');
        //$this->db->from("minisabana20182");
        $where =$data. " = 'X' and Final >now() and HorInic <now() and (CodGene = 'T461' OR CodGene = 'T447' OR CodGene = 'T443')";
        $this->db->where($where);
        $this->db->order_by('HorInic', 'ASC');
        $query = $this->db->get($this->minisabanaTable);
        return $query->result();
    }
    public function get_actual_total($data){
        $this->db->select("(SUM(Inscritos)) AS total, (count(Docente))AS totaldocentes");
        $where =$data. " = 'X' and Final >now() and HorInic <now() and (CodGene = 'T461' OR CodGene = 'T447' OR CodGene = 'T443')";
        $this->db->where($where);
        $this->db->order_by('HorInic', 'ASC');
        $query = $this->db->get($this->minisabanaTable);
        return $query->result();
    }
    public function get_secciones(){
        $this->db->select("Seccion, Asignatura, Docente");
        $this->db->from($this->ramosTable);
        $this->db->order_by("Seccion");
        $query = $this->db->get();
        return $query->result();
    }
    public function get_seccionesm(){
        $this->db->select("Seccion20191.Seccion, Seccion20191.Nivel, Seccion20191.Jornada, Seccion20191.Comentario, Seccion20191.Plan, carrera.nomCarrera");
        $this->db->from("Seccion20191");
        $this->db->join("carrera","Seccion20191.Plan=carrera.CodCarrera");
        $this->db->order_by("Seccion asc");
        $query = $this->db->get();
        return $query->result();
    }
    public function get_secciones20181(){
        $this->db->select("Seccion.Seccion, Seccion.Nivel, Seccion.Jornada, Seccion.Comentario, Seccion.Plan, carrera.nomCarrera");
        $this->db->from("Seccion");
        $this->db->join("carrera","Seccion.Plan=carrera.CodCarrera");
        $this->db->order_by("Plan asc", "Nivel asc", "Jornada asc","Seccion desc");
        $query = $this->db->get();
        return $query->result();
    }
    public function get_seccionm($data){
        $this->db->select("*");
        $this->db->from("Seccion20191");
        $where = "Seccion = \"" . $data . "\"";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_siglasm($data){
        $this->db->select("*");
        $this->db->from("Cursable20191");
        $where = "Plan = \"".$data["Plan"]."\" and Nivel = \"".$data["Nivel"]."\" and Jornada = \"".$data["Jornada"]."\"";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    /*
    Método: get_lista($data)
    Parámetro: Sección en url
    Qué hace: Trae la lista de alumnos del curso según reporte de inscripciones SAP cargado en BBDD    
    */
    public function get_lista($data){
        $this->db->select("distinct(icomerci_clases.".$this->inscritosTable.".RutInscri),
        icomerci_clases.".$this->inscritosTable.".SecInscri,
        icomerci_clases.".$this->indiceTable.".Usuario,
        icomerci_clases.".$this->indiceTable.".Email,
        icomerci_clases.".$this->indiceTable.".Nombres,
        icomerci_clases.".$this->indiceTable.".ApellidoP,
        icomerci_clases.".$this->indiceTable.".ApellidoM");
        $this->db->from("icomerci_clases.".$this->inscritosTable."");
        $this->db->join($this->indiceTable,"icomerci_clases.".$this->inscritosTable.".RutInscri=icomerci_clases.".$this->indiceTable.".Rut","inner");
        $where = "SecInscri = \"".$data."\"";
        $this->db->where($where);
        $this->db->order_by("ApellidoP ASC","ApellidoM ASC","Nombres ASC");
        $query = $this->db->get();
        return $query->result();
    }
    /*
    Método: get_docentes()
    Parámetro: no tiene.
    Qué hace: Trae la lista de docentes en la DDBB.
    */
    public function get_docentes(){
        $this->db->select("*");
        $this->db->from("docentes");
        $this->db->order_by("NombreDocente");
        $query = $this->db->get();
        return $query->result();
    }
    /*
    Método: get_docentescargados()
    Parámetro: Array $data.
    Qué hace: Trae la lista de docentes cargados en el miniAgendador.
    */    
    public function get_docentescargados($data){
        $this->db->select("*");
        $this->db->from("miniAgendador20191");
        $where = $data["diax"] . "='x' and Final>'" . $data["HorInic"] . "' and HorInic<'" . $data["Final"] . "'";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    /*
    Método: get_listasala()
    Parámetro: Array $data.
    Qué hace: Trae la lista de salas para el miniAgendador
    */    
    public function get_listasala(){
        $this->db->select("distinct(Aula), Capacidad");
        $this->db->from("salasAgendador20191");        
        $this->db->order_by("Aula");
        $query = $this->db->get();
        return $query->result();
    }
    /*
    Método: get_listasalaocupada()
    Parámetro: Array $data.
    Qué hace: Trae la lista de salas para el miniAgendador
    */    
    public function get_listasalaocupada($data){
        $this->db->select("*");
        $this->db->from("miniAgendador20191");
        $where = $data["diax"] . "='x' and Final>'" . $data["HorInic"] . "' and HorInic<'" . $data["Final"] . "'";
        $this->db->where($where);
        $this->db->order_by("Aula");
        $query = $this->db->get();
        return $query->result();
    }
    /*
    Método: get_horario()
    Parámetro: seccion.
    Qué hace: Trae horario del miniAgendador
    */    
    public function get_horario($data){        
        $this->db->select("miniAgendador20191.IdAsig, miniAgendador20191.Seccion, miniAgendador20191.IdDocente
        , miniAgendador20191.Asignatura, miniAgendador20191.Aula, miniAgendador20191.Capacidad
        , docentes.NombreDocente, miniAgendador20191.Lun, miniAgendador20191.Mar, miniAgendador20191.Mie
        , miniAgendador20191.Jue, miniAgendador20191.Vie, miniAgendador20191.Sab, miniAgendador20191.HorInic
        , miniAgendador20191.Final, Cursable20191.DesAsig");
        $this->db->from("miniAgendador20191");
        $this->db->join("docentes","miniAgendador20191.IdDocente = docentes.IdDocente","inner");
        $this->db->join("Cursable20191","miniAgendador20191.Asignatura=Cursable20191.Sigla","inner");
        $where = "miniAgendador20191.Seccion = \"" . $data . "\" ";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_horario20181($data){        
        $this->db->select("miniAgendador.IdAsig, miniAgendador.Seccion, miniAgendador.IdDocente
        , miniAgendador.Asignatura, miniAgendador.Aula, miniAgendador.Capacidad
        , docentes.NombreDocente, miniAgendador.Lun, miniAgendador.Mar, miniAgendador.Mie
        , miniAgendador.Jue, miniAgendador.Vie, miniAgendador.Sab, miniAgendador.HorInic
        , miniAgendador.Final, Cursable.DesAsig");
        $this->db->from("miniAgendador");
        $this->db->join("docentes","miniAgendador.IdDocente = docentes.IdDocente","inner");
        $this->db->join("Cursable","miniAgendador.Asignatura=Cursable.Sigla","inner");
        $where = "miniAgendador.Seccion = \"" . $data . "\" ";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    /*

    */
    public function set_asignatura(){
        $dia = array("","","","","","","");
            if($this->input->post('Dia')=="Lun"){
                $dia[1]="x";
            } elseif ($this->input->post('Dia')=="Mar") {
                $dia[2]="x";
            } elseif ($this->input->post('Dia')=="Mie") {
                $dia[3]="x";
            } elseif ($this->input->post('Dia')=="Jue") {
                $dia[4]="x";
            } elseif ($this->input->post('Dia')=="Vie") {
                $dia[5]="x";
            } elseif ($this->input->post('Dia')=="Sab") {
                $dia[6]="x";
            }
            if($this->input->post('Teo')=="Teorico"){$Teorico = TRUE;}else{$Teorico = FALSE;}
            if($this->input->post('Pra')=="Practico"){$Practico = TRUE;}else{$Practico = FALSE;}
        $data = array(
            'IdAsig' => NULL,
            'Seccion' => $this->input->post('Seccion'),            
            'IdDocente' => $this->input->post('Docente'),
            'Asignatura' => $this->input->post('Sigla'),
            'Aula' => $this->input->post('Sala'),
            'HorInic' => $this->input->post('Inicio'),
            'Final' => $this->input->post('Final'),
            'Lun' => $dia[1],
            'Mar' => $dia[2],
            'Mie' => $dia[3],
            'Jue' => $dia[4],
            'Vie' => $dia[5],
            'Sab' => $dia[6],            
            'Capacidad' => $this->input->post('Capacidad'),
            'Teorico' => $Teorico,
            'Practico' => $Practico
        );
    
        return $this->db->insert('miniAgendador20191', $data);
    }
    /*
    */
    public function get_docentescarga(){
        $this->db->select("DISTINCT(docentes.NombreDocente), docentes.IdDocente");
        $this->db->from("miniAgendador20191");
        $this->db->join("docentes","miniAgendador20191.idDocente=docentes.idDocente","inner");
        $this->db->order_by("docentes.NombreDocente");
        $query = $this->db->get();
        return $query->result();
    }
    /*
    */
    public function get_docentecarga($data){
        $this->db->select("miniAgendador20191.IdAsig, miniAgendador20191.Seccion, miniAgendador20191.IdDocente
        , miniAgendador20191.Asignatura, miniAgendador20191.Aula, miniAgendador20191.Capacidad
        , docentes.NombreDocente, miniAgendador20191.Lun, miniAgendador20191.Mar, miniAgendador20191.Mie
        , miniAgendador20191.Jue, miniAgendador20191.Vie, miniAgendador20191.Sab, miniAgendador20191.HorInic
        , miniAgendador20191.Final, Cursable20191.DesAsig");
        $this->db->from("miniAgendador20191");
        $this->db->join("docentes","miniAgendador20191.IdDocente = docentes.IdDocente","inner");
        $this->db->join("Cursable20191","miniAgendador20191.Asignatura=Cursable20191.Sigla","inner");
        $where = "miniAgendador20191.idDocente = \"" . $data . "\" ";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    /*
    */
    public function get_salascarga(){
        $this->db->select("DISTINCT(miniAgendador20191.Aula), salasAgendador20191.capacidad");
        $this->db->from("miniAgendador20191");
        $this->db->join("salasAgendador20191","miniAgendador20191.Aula=salasAgendador20191.Aula","inner");        
        $this->db->order_by("miniAgendador20191.Aula");
        $query = $this->db->get();
        return $query->result();
    }
    /*
    */
    public function get_salacarga($data){
        $this->db->select("miniAgendador20191.IdAsig, miniAgendador20191.Seccion, miniAgendador20191.IdDocente
        , miniAgendador20191.Asignatura, miniAgendador20191.Aula, miniAgendador20191.Capacidad
        , docentes.NombreDocente, miniAgendador20191.Lun, miniAgendador20191.Mar, miniAgendador20191.Mie
        , miniAgendador20191.Jue, miniAgendador20191.Vie, miniAgendador20191.Sab, miniAgendador20191.HorInic
        , miniAgendador20191.Final, Cursable20191.DesAsig");
        $this->db->from("miniAgendador20191");
        $this->db->join("docentes","miniAgendador20191.IdDocente = docentes.IdDocente","inner");
        $this->db->join("Cursable20191","miniAgendador20191.Asignatura=Cursable20191.Sigla","inner");
        $where = "miniAgendador20191.Aula = \"" . $data . "\" ";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_asignatura($data){
        $this->db->select("*");
        $this->db->from("miniAgendador20191");
        $where = "IdAsig = \"".$data."\"";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->row();
    }
    public function borrar_asignatura(){
        $this->db->where('IdAsig',  $this->input->post('IdAsig'));
        $this->db->delete('miniAgendador20191');
    }
    public function get_horario_alumno($data){
        $this->db->select("*");
        $this->db->from($this->inscritosTable);
        $this->db->join($this->minisabanaTable,$this->inscritosTable.".SecInscri=".$this->minisabanaTable.".Seccion","inner");
        $where = "RutInscri = \"".$data."\"";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_docentes_sabana(){
        $this->db->select("DISTINCT(Docente) as Docente, IdDocente as Id");
        $this->db->from($this->minisabanaTable);
        $where = "Plan like \"%144%\"";
        $this->db->where($where);
        $this->db->order_by("Docente");
        $query = $this->db->get();
        return $query->result();
    }
    public function get_horario_docentesabana($data){
        $this->db->select("*");
        $this->db->from($this->minisabanaTable);
        $where = "IdDocente = \"".$data."\"";
        $this->db->where($where);
        $this->db->order_by("Seccion");
        $query = $this->db->get();
        return $query->result();
    }
}
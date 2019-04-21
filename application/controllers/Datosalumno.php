<?php
class Datosalumno extends CI_Controller{
    public $rutAlumno;
    public function __construct()
        {
                parent::__construct();
                $this->load->model('indice_model');
                $this->load->model('minisabana_model');
                $this->load->model('atenciones_model');
                $rutAlumno = $this->input->get('Alum');
        }
        public function index($rutAlumno="188298281")
        {
                $data['dataalumno'] = $this->indice_model->get_inscripciones($rutAlumno);
                $this->load->view('minidata',$data);
        }
        public function contacto($rutAlumno="188298281")
        {
                $data['contactoalumno'] = $this->indice_model->get_contacto($rutAlumno);
                $this->load->view('minicontacto',$data);
        }
        public function nombre($rutAlumno="188298281")
        {
                $data['nombrealumno'] = $this->indice_model->get_nombre($rutAlumno);
                $this->load->view('mininombre',$data);
        }
        public function rut($rutAlumno="188298281")
        {
                $data['dataalumno'] = $this->indice_model->get_rut($rutAlumno);
                $this->load->view('minirut',$data);
        }
        public function lista($seccion="")
        {
                $data['listasec'] = $this->minisabana_model->get_lista($seccion);
                $data["seccion"] = array($seccion);
                $this->load->view('minilista',$data);
        }
        public function atenciones($rutAlumno="")
        {
                $data['aten'] = $this->atenciones_model->get_atenciones($rutAlumno);
                $data['rut'] = $rutAlumno;                           
                $this->load->view('miniatenciones',$data);                
        }
        public function agregarcomentario()
    {
        $this->atenciones_model->set_comentario();
        $this->load->view("miniagregar");
    }

        
}
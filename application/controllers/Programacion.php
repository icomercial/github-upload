<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programacion extends CI_Controller {

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
	public $getvalue;
    public function __construct()
        {
                parent::__construct();
                //$getvalue = $this->uri->segment(5);				
				$this->load->model('minisabana_model');
        }
	 public function index($getvalue)
	{
                $getvalue = array(
                        "Plan" => $this->uri->segment(3),
                        "Nivel" => $this->uri->segment(4) );
                $this->load->view('header');
                $this->load->view('nav');
                $datos["algo"]=$getvalue;
                $this->load->view('miniprogramacion',$datos);
                $this->load->view('footer');
		
    }
    public function siglasm($getvalue)
	{
                $seccion = $getvalue;
                $seccionR = $this->minisabana_model->get_seccionm($seccion);                
                $datosseccion = array(
                "Plan" => $seccionR->Plan,
                "Nivel" => $seccionR->Nivel,
                "Jornada" => $seccionR->Jornada                
                );
                $datos["cursables"] = $this->minisabana_model->get_siglasm($datosseccion);                
                $this->load->view('minisiglas',$datos);                
		
    }
    public function finalm($getvalue)
    {
                $data["inicioarray"]=$this->uri->segment(3);
                $this->load->view('minifinal',$data);
    }
    public function listadocente($getvalue)
    {
    //Formato URL es /programacion/listadocente/diax/HorInic/Final/        
        $periodos = array(
            "diax" => $this->uri->segment(3),
            "HorInic" => $this->uri->segment(4),
            "Final" => $this->uri->segment(5) );
        //traigo los docentes
        $docentes = $this->minisabana_model->get_docentes();//result array
        $e = 0;
        //traigo los docentes a bloquear
        $cargados = $this->minisabana_model->get_docentescargados($periodos);//result array 2
        $f = 0;
            $arrayprofe=array();
        foreach ($cargados as $cargado) {
            $arrayprofe[$f] = $cargado->IdDocente;
            $f++;
        }
        
        foreach ($docentes as $docente) {
            if (in_array($docente->IdDocente, $arrayprofe)) {
                
            } else {
                //Imprime el docente
                $arregloId[$e] = array(
                    "IdDocente" => $docente->IdDocente,
                    "NombreDocente" => $docente->NombreDocente);                
            }
            $e++;
        }
        $datos["docentes"] = $arregloId;

            //$datos["algo"]=$getvalue;
            $this->load->view('minilistadocente',$datos);
    }
    public function listasala($getvalue)
    {
    //Formato URL es /programacion/listasala/diax/HorInic/Final/        
        $periodos = array(
            "diax" => $this->uri->segment(3),
            "HorInic" => $this->uri->segment(4),
            "Final" => $this->uri->segment(5) );
        //traigo las salas
        $salas = $this->minisabana_model->get_listasala();//result array
        $e = 0;
        //traigo las salas a bloquear
        $cargadas = $this->minisabana_model->get_listasalaocupada($periodos);//result array 2
        $f = 0;
            $arraysala=array();
        foreach ($cargadas as $cargada) {
            $arraysala[$f] = $cargada->Aula;
            $f++;
        }
        
        foreach ($salas as $sala) {
            if (in_array($sala->Aula, $arraysala)) {
                
            } else {
                //Imprime el docente
                $arregloId[$e] = array(
                    "Aula" => $sala->Aula,
                    "Capacidad" => $sala->Capacidad);                
            }
            $e++;
        }
        $datos["salas"] = $arregloId;

            //$datos["algo"]=$getvalue;
            $this->load->view('minilistasala',$datos);
    }
    /*

    */
    public function horario($getvalue)
    {   
        $getvalue = $this->uri->segment(3);
        $data["ramos"] = $this->minisabana_model->get_horario($getvalue);
        $this->load->view('minihorario',$data);
    }
    public function horario20181($getvalue)
    {   
        $getvalue = $this->uri->segment(3);
        $data["ramos"] = $this->minisabana_model->get_horario20181($getvalue);
        $this->load->view('minihorario',$data);
    }
    /*

    */
    public function agregarasignatura()
    {
        $this->minisabana_model->set_asignatura();
        $this->load->view("miniagregar");
    }
    /*

    */
    public function cargadocente($getvalue)
    {
        $getvalue = $this->uri->segment(3);
        $data["ramos"] = $this->minisabana_model->get_docentecarga($getvalue);
        $this->load->view('minihorarioprofe',$data);
    }
    /*

    */
    public function cargadocente20182($getvalue)
    {
        $getvalue = $this->uri->segment(3);
        $data["ramos"] = $this->minisabana_model->get_horario_docentesabana($getvalue);
        $this->load->view('minihorarioprofe20182',$data);
    }
    /*

    */
    public function cargasala($getvalue)
    {
        $getvalue = $this->uri->segment(3);
        $data["ramos"] = $this->minisabana_model->get_salacarga($getvalue);
        $this->load->view('minihorariosala',$data);
    }
    public function editarasignatura()
    {
        $getvalue = $this->uri->segment(3);
        $data["asigX"] = $this->minisabana_model->get_asignatura($getvalue);
        $this->load->view('minieditarasignatura',$data);
    }
    public function borrarasignatura()
    {   
        $this->minisabana_model->borrar_asignatura();
        $this->load->view("miniagregar");
    }
    public function vercursable($getvalue)
    {   
        $seccion = $getvalue;
        $seccionR = $this->minisabana_model->get_seccionm($seccion);                
        $datosseccion = array(
        "Plan" => $seccionR->Plan,
        "Nivel" => $seccionR->Nivel,
        "Jornada" => $seccionR->Jornada                
        );
        $datos["cursables"] = $this->minisabana_model->get_siglasm($datosseccion);
        $this->load->view('minicursable',$datos);
    }
}
    ?>

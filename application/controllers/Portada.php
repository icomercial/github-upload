<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portada extends CI_Controller {

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
	public $rutAlumno;
    public function __construct()
        {
                parent::__construct();
				$getvalue = $this->input->get('Alum','Seccion');
				$rutAlumno = $getvalue[0];
				$seccion = $getvalue[1];
				$this->load->model('minisabana_model');
				$this->load->model('atenciones_model');
        }
	 public function index()
	{
				$this->load->view('header');
				$this->load->view('nav');
				$data['atenciones'] = $this->atenciones_model->get_lastatenciones();
                $this->load->view('portada',$data);
                $this->load->view('footer');
		
	}
	public function datosalumno($rutAlumno="188298281")
	{
				$this->load->view('header');
                $this->load->view('nav');
				$this->load->view('datosalumno');
				$data['datorut'] = array($rutAlumno);
                $this->load->view('footer',$data);
		
	}
	public function correosasignatura($seccion="0")
	{
		$this->load->view('header');
				$this->load->view('nav');
				$data['secciones'] = $this->minisabana_model->get_secciones();
				$data['seccion'] = array($seccion);
                $this->load->view('correosasignatura',$data);
                $this->load->view('footer');
		
	}
	public function programacion()
	{
		$this->load->view('header');
		$this->load->view('nav');
		$data['secciones'] = $this->minisabana_model->get_seccionesm();
		$this->load->view('programacion',$data);
		$this->load->view('footer');
	}
	public function cargadocente()
	{
		$this->load->view('header');
		$this->load->view('nav');
		$data['docentes'] = $this->minisabana_model->get_docentescarga();
		$this->load->view('minicarga',$data);
		$this->load->view('footer');
	}
	public function cargasala()
	{
		$this->load->view('header');
		$this->load->view('nav');
		$data['salas'] = $this->minisabana_model->get_salascarga();
		$this->load->view('minicargasalas',$data);
		$this->load->view('footer');
	}
	public function programacion20181()
	{
		$this->load->view('header');
		$this->load->view('nav');
		$data['secciones'] = $this->minisabana_model->get_secciones20181();
		$this->load->view('programacion20181',$data);
		$this->load->view('footer20181');
	}
	public function docentes20182($rutDocente="60003120")
	{
		$this->load->view('header');
		$this->load->view('nav');
		$data['docentes'] = $this->minisabana_model->get_docentes_sabana();
		$data['datodocente'] = array($rutDocente);
		$this->load->view('docentes20182',$data);
		$this->load->view('footer');
	}
}

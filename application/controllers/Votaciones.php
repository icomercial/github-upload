<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Votaciones extends CI_Controller {

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
	 public function index($rutAlumno="188298281")
	{
				$this->load->view('header');
				$this->load->view('navOeste');				
				$this->load->view('datosvotante');
				$data['datorut'] = array($rutAlumno);
                $this->load->view('footer',$data);
		
	}
	
}
?>
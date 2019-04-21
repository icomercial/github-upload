<?php
class Actualday extends CI_Controller{
    public function __construct()
        {
                parent::__construct();
                $this->load->model('minisabana_model');
                $this->load->model('indice_model');
        }
        public function index()
        {
                $Dayposition = array("Lun","Lun","Mar","Mie","Jue","Vie","Sab","Lun");
                $Daytoday = $Dayposition[date("N")];
                $data['sabana'] = $this->minisabana_model->get_actual_clases($Daytoday);
                $data["totalsabana"] = $this->minisabana_model->get_actual_total($Daytoday);
                //$this->load->view('header');
                //$this->load->view('nav');
                $this->load->view('minisabana',$data);
                //$this->load->view('footer');
        }
        public function cumples()
        {
                $data['cumpleshoy'] = $this->indice_model->get_cumples();
                $this->load->view('minicumples',$data);
        }

        
}
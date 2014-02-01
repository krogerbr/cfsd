<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lista extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		//$this->load->view('welcome_message');
		$this->load->view('listas/lista_simples');
		//echo "index";
		// $this->load->helper('url');
		// echo site_url();
		// echo "<br>";
		// echo base_url();
		// echo "<br>";
		// echo current_url();
		// echo "<br>";
		// echo uri_string();
		// echo "<br>";
		// echo index_page();
		// echo "<br>";
		// echo anchor("dev/css/style.css", "css");

	}

	/**
	 *
	 * Description: Carrega Lista para alterar os dados existentes
	 */
	public function editarLista(){
		$this->load->model("ct_listas");
		"echo listas existentes: <br>";
		var_dump( $this->ct_listas->getAllList() );

	}

	/**
	 *
	 * Description: Insere dados numa lista recem criada
	 */
	public function gerarLista(){
		$this->load->helper('url');
		// Formulario de customizacao da lista
		// $this->load->view("listas/form_list_head");
	}

	/**
	 *
	 * Description: Gera uma nova lista vazia, com base nos campos
	 *              forem fornecidos
	 */
	public function criarLista(){
		$this->load->model("ct_listas");
		// envia form para criar lista
		if ( $this->input->post() === false){
			// Formulario de customizacao da lista
			$this->load->view("listas/form_list_head");

		// Salva lista vinda no post
		} else {
			$this->ct_listas->setList($this->input->post());

			echo "Lista Criada com SUCESSO!!";

		}
	}

	public function tst(){
		// echo $this->bd->query("show databases");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
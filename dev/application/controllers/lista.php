<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lista extends CI_Controller {

	public function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

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
		// echo "ok";
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

	public function edit_list($lista_id){
		$this->load->model("ct_listas");
		
		$data["data_list"] = $this->ct_listas->getDataList($lista_id);
		$data["head"] = $this->ct_listas->getHead($lista_id);

		$this->load->view("listas/edit_list", $data);		

	}

	/**
	 *
	 * Description: Carrega Lista para alterar os dados existentes
	 */
	public function select_list(){
		$this->load->model("ct_listas");
		
		$data["listas"] = $this->ct_listas->getAllList();

		$this->load->view("listas/select_list", $data);
	}

	/**
	 *
	 * Description: Insere dados numa lista recem criada
	 */
	public function generate_list(){
		$this->load->helper('url');
		// Formulario de customizacao da lista
		// $this->load->view("listas/form_list_head");
	}

	/**
	 *
	 * Description: Gera uma nova lista vazia, com base nos campos
	 *              forem fornecidos
	 */
	public function create_list(){
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

	public function find_aluno(){

		$this->load->library('session');

		$check = $this->session->userdata('check');

		// os dados dessa solicitação ja foram requisitados ao BD
		if ($check == $this->input->post()) {
			return;

		} else {
			// Model para dados na tabela de alunos
			$this->load->model("ct_alunos");
			// Grava valores na sessao para evitar buscar novamente os mesmos dados
			$this->session->set_userdata( 'check',$this->input->post() );
			
			// parametros para busca
			$search['field'] = key($this->input->post());
			$search['data']  = $this->input->post($search['field']);

			// $result = $this->ct_alunos->find_aluno($search);
			$this->ct_alunos->findAluno($search);

			// if ( $result !== false ){
			// 	echo json_encode($result);
			// }

		}

		// $this->load->library('session');

		// $this->session->userdata('item');

		// $this->session->set_userdata($array);

		// $this->session->unset_userdata('some_name');

		
		// if ( $this->Bkp_data == $check ){
		// 	echo "mesmos dados";
		// 	var_dump($check);
		// 	var_dump($this->Bkp_data);

		// } else {
		// 	$this->Bkp_data = $check;
		// 	echo "dados diferentes";
		// 	var_dump($check);
		// 	var_dump($this->Bkp_data);
		// }
		
		// $data = array(
		// 	"nome" => "dener",
		// 	"num_pm" => "1616663",
		// );
		// echo json_encode($data);
	}

	public function set_aluno(){
		
	}

	public function tst(){
		// echo $this->bd->query("show databases");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
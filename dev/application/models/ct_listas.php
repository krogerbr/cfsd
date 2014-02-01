<?php

class Ct_listas extends CI_Model {
	
	public function __construct() {
        // Call the Model constructor
        parent::__construct();
        // Carrega conexao com banco de dados
        $this->load->database();
    }

    /**
     * Description: salva lista no banco de dados para futuras alteracoes
     *
     */
    public function setList( $lista = array() ){
        
        // Nome da lista para faciliar a procura pelo usuario
        $nome_lista = $lista["nome_lista"];
        unset($lista["nome_lista"]);

        // Cabeçalho da tabela
        foreach ($lista as $key => $value) {
            $cabecalho[] = $key;
        }
        
        $cabecalho = json_encode($cabecalho);
        
        if ($this->db->insert('ct_listas', 
                            array( "cabecalho"=>$cabecalho, "nome"=>$nome_lista )) ){
            return true;
        } else {
            echo "Erro ao salvar lista";
        }
        // data_criacao
        // head_list
        // list_id
    }

    public function getList(){

    }

    public function getAllList(){
        $query = $this->db->get('ct_listas');

        foreach ($query->result() as $row) {
            // echo "nome: " . $row->nome . "<br>";
            // echo "cabeçalho <br>";
            // var_dump( json_decode($row->cabecalho) );
            // echo "criada em " . $row->data_criacao . "<br><br>";

            // date( "Y-m-d H:i:s", $row->data_criacao );
                        
        }
        if ($query->num_rows > 0) {
            return $query->result();
        }
        return false;
    }

    
}

?>
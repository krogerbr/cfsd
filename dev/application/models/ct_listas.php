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
    }

    /**
     *
     *
     */
    public function getDataList($Lista_id){
        // $query = $this->db->get_where('dt_listas', array('lista_id' => $Lista_id));

        $head = $this->getHead($Lista_id);

        $fields = '';

        foreach ($head as $key => $value) {
            switch ($value) {
                case 'num_pm': $fields .= 'B.num_pm, ';
                    break;
                case 'nome': $fields .= 'B.nome as al_nome, ';
                    break;
                case 'nome_funcional': $fields .= 'B.nome_funcional, ';
                    break;
                case 'turma': $fields .= 'B.turma, ';
                    break;
                case 'num_curso': $fields .= 'B.num_curso, ';
                    break;

                case 'grau_hierarquico': $fields .= 'C.grau_hierarquico, ';
                    break;
                case 'responsavel': $fields .= 'C.nome as sp_nome, ';
                    break;
            }
        }            

        // $this->db->select('
        //     B.nome as al_nome,
        //     B.nome_funcional,
        //     B.num_pm,
        //     B.num_curso,
        //     B.turma,
        //     C.grau_hierarquico,
        //     C.nome as sp_nome
        // ')
        $this->db->select( $fields )
        ->from('dt_listas A')
            ->join('ct_alunos B', 'B.al_id = A.al_id')
            ->join('ct_superiores C', 'C.superior_id = A.responsavel_id')
        ->where('A.lista_id', $Lista_id);

        $query = $this->db->get();

        if ( $query->num_rows() > 0 ) {
            return $query->result();            
        }
        return false;
    }

    public function getHead($Lista_id){

        $this->db->select('cabecalho')
        ->from('ct_listas')
        ->where("lista_id = $Lista_id");

        $head = $this->db->get()->result();

        return json_decode( $head[0]->cabecalho );
    }

    /**
     *
     *
     */
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

    public function setAlOnList(){
        echo "ok";
    }

    
}

?>
<?php

class Ct_alunos extends CI_Model {
	
	public function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function findAluno($search){

		$this->db->from('ct_alunos');

        // para campos nao numericos usar like para busca
        if ( $search['field'] != 'num_pm'){
        	$this->db->like( $search['field'], $search['data'] );

        // Com campos numericos buscar apenas valor completo
        } else {
        	$this->db->where( $search['field']." = ".$search['data'] );
        }

        return $this->db->get()->result();
    }

    
}

?>
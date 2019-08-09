<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
/**
 * Modelo genérico com funções comuns a todos os modelos
 */
class MJR_Model extends CI_Model {
	private $table_name;
	private $loaded;
	public function __construct($tabela = "") {
		parent::__construct ();
		$this->load->database ();
		$this->loaded = false;
		$this->table_name = $tabela;
	}
	public function get_id_field() {
		$msg = "ATENÇÃO! Você está usando um modelo personalizado, por tanto é obrigatório a ";
		$msg .= "sobrecarga do método \"get_id_field\" o qual deve retornar o nome do campo chave do modelo";
		throw new Exception ( $msg );
	}
	/**
	 * Retorna verdadeiro quando o objeto é novo, ou seja, não possui ID
	 */
	public function is_new() {
		$field_name = $this->get_id_field ();
		
		$field_value = $this->{$field_name};
		
		if (! is_null ( $field_value )) {
			if ($field_value != "" || $field_value != 0) {
				return false;
			}
		}
		return true;
	}
	
	/**
	 * Seta o valor no campo chave
	 */
	public function set_id_value($id_value) {
		$field_name = $this->get_id_field ();
		$this->{$field_name} = $id_value;
	}
	
	/**
	 * retorna o valor no campo chave
	 */
	public function get_id_value() {
		$field_name = $this->get_id_field ();
		return $this->{$field_name};
	}
	
	/**
	 * Busca um registro pelo campo id
	 */
	public function get_by_id($id) {
		$this->db->where ( $this->get_id_field (), $id );
		$result = $this->db->get ( $this->table_name );
		if ($result->num_rows ()) {
			$dados = $result->row ();
			foreach ( $dados as $key => $value ) {
				// verifica se existe o campo no modelo
				if (property_exists ( $this, $key )) {
					// seta informação no modelo
					$this->{$key} = $this->converterFromDataBase ( $key, $value );
				}
			}
		}
	}
	
	/**
	 * Retorna todos os registro de uma dada tabela
	 */
	public function get_all() {
		$result = $this->db->get ( $this->table_name );
		if ($result->num_rows ()) {
			$itens = $result->result ();
			return $this->convertList($itens);
		}
		return array ();
	}



	/**
	 * Retorna a Quantidade de resgistros presentes em uma determinada tabela
	 Equivale ao Equivale ao Select Count *
	 	 */
	public function count() {
		 return $this->db->count_all_results($this->table_name);  // Produces an integer, like 25
	}



	/**
	 * Percorre uma lista de objetos e everifica se algum campo precisa de tratamento
	 */
	private function convertList($itens) {
		if (is_array ( $itens )) {
			foreach ( $itens as $dados ) {
				foreach ( $dados as $key => $value ) {
					// verifica se existe o campo no modelo
					if (property_exists ( $this, $key )) {
						// seta informação no modelo
						$dados->{$key} = $this->converterFromDataBase ( $key, $value );
					}
				}
			}
		}
		// retorna a lista convertida
		return $itens;
	}
	/**
	 * Retorna todos os registro de uma dada tabela, possibilitando a ordenação dos valores
	 */
	public function get_all_order($campo_ordem = "descricao", $forma = "asc") {
		$this->db->order_by ( $campo_ordem, $forma );
		$result = $this->db->get ( $this->table_name );
		if ($result->num_rows ()) {
			return $this->convertList($result->result ()); 
		}
		return array ();
	}
	
	/**
	 * Remove objeto do banco de dados a partir do seu id.
	 *
	 * @param String $id        	
	 */
	public function remover($id) {
		$this->db->where ( $this->get_id_field (), $id );
		$this->db->delete ( $this->table_name );
	}
	
	/**
	 * Insere ou atualiza informações no banco
	 */
	public function gravar() {
		// somente carrega os dados uma vez
		if (! $this->loaded) {
			$this->loadData ();
		}
		if ($this->is_new ()) {
			// insert
			$data = $this->db->insert ( $this->table_name, $this );
			// seta id no modelo
			$id = $this->db->insert_id ();
			$this->set_id_value ( $id );
		} else {
			// update
			$this->db->where ( $this->get_id_field (), $this->get_id_value () );
			$this->db->update ( $this->table_name, $this );
		}
		// depois de gravar recarrega os dados do banco para que os campos
		// de data sejam apresentados corretamente, eles desconfiguram
		// pq são convertidos no padrao do banco, ao recarregar eles são convertidos
		// no padrão dd/mm/aaaa
		// TODO implementar uma maneira mais eficiente!
		$this->get_by_id ( $this->get_id_value () );
	}
	
	/**
	 * Define que o modelo foi carregado manualmente e nao via requisicao post
	 */
	public function manualLoad() {
		$this->loaded = true;
	}
	
	/**
	 * Carrega os dados de uma requisicao ajax para dentro do modelo
	 */
	public function loadData() {
		foreach ( $_POST as $key => $val ) {
			if (property_exists ( $this, $key )) {
				
				try {
					/**
					 * Pode ocorrer erro caso se sete um valor que não esteja presente no objeto modelo, isso
					 * ocorre quando a requisição de post contem informações extras além das contidas
					 * no modelo, por isso quando ocorre um erro sinplesmente ignora
					 */
					$this->{$key} = $this->converter ( $key, $val );
				} catch ( Exception $e ) {
					// full ignore
				}
			}
		}
		$this->loaded = true;
	}
	
	/**
	 * Metodo para ser sobrescrito quando se deseja fazer algum tratamento
	 * ou conversão de valores antes de carregar os dados no objeto, um exemplo
	 * é a conversão de datas.
	 * A implementação padrão retorna o valor sem nenhuma
	 * alteração
	 */
	public function converter($campo, $valor) {
		// retorna o valor na integra
		return $valor;
	}
	/**
	 * Metodo para ser sobrescrito quando se deseja fazer algum tratamento
	 * ou conversão de valores antes de carregar os dados no objeto, um exemplo
	 * é a conversão de datas.
	 * A implementação padrão retorna o valor sem nenhuma
	 * alteração. Essa ação é chamada ao carregar os dados do banco
	 */
	public function converterFromDataBase($campo, $valor) {
		// retorna o valor na integra
		return $valor;
	}
	/**
	 * Converte um valor de data para o formato padrao esperado pelo banco
	 */
	public function convertDateToDB($data) {
		if ($data) {
			$date = DateTime::createFromFormat ( 'd/m/Y', $data );
			return $date->format ( 'Y-m-d' );
		}
		// deve-se retornar null para os campos não preenchidos
		return null;
	}
	/**
	 * Converte um valor de data para o formato brasileiro dd/mm/aaaa
	 */
	public function convertDateToView($data) {
		if ($data) {
			return date ( "d/m/Y", strtotime ( $data ) );
		}
		// deve-se retornar null para os campos não preenchidos
		return null;
	}
}
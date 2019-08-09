<?php
class MY_Form_Validation extends CI_Form_Validation {
	/**
	 * Retorna erros de validação em forma de array.
	 */
	public function error_array() {
		return $this->_error_array;
	}
}
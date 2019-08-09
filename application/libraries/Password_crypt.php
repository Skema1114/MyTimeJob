<?php
class Password_crypt {
	/**
	 * Crates password hash for $input with a default cost of 10 if $rounds is not specified.
	 * @param string $input
	 * @param number $rounds
	 */
	public function bcrypt($input, $rounds = 10)
	{
		$crypt_options = array (
			'cos' => $rounds,
		);
		return password_hash($input, CRYPT_BLOWFISH, $crypt_options);
	}
	
	
}
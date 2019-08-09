<?php
$config['error_prefix'] = "";
$config['error_suffix'] = "";
$config = array (
		'cadastra_usuario' => array (
				array (
						'field' => 'nome',
						'label' => 'Nome',
						'rules' => 'trim|required|min_length[4]',
				),
				array (
						'field' => 'email',
						'label' => 'Email',
						'rules' => 'trim|required|valid_email|is_unique[Usuario.email]',
				),
				array (
						'field' => 'senha',
						'label' => 'Senha',
						'rules' => 'trim|required|min_length[6]|max_length[60]',
				),
				array (
						'field' => 'con_senha',
						'label' => 'Confirma Senha',
						'rules' => 'trim|required|matches[senha]',
				) 
		), // fim cadastro_usuario
		'atualiza_usuario' => array (
				array (
						'field' => 'nome',
						'label' => 'Nome',
						'rules' => 'trim|required|min_length[4]',
				),
				array (
						'field' => 'email',
						'label' => 'Email',
						'rules' => 'trim|required|valid_email',
				),
				array (
						'field' => 'senha',
						'label' => 'Senha',
						'rules' => 'trim|required|min_length[6]|max_length[60]',
				),
				array (
						'field' => 'con_senha',
						'label' => 'Confirma Senha',
						'rules' => 'trim|required|matches[senha]',
				)
		) // fim atualiza_usuario
) 
;
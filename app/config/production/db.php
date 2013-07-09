<?php
/**
 * The production database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=fuel_prod',
			'username'   => 'root',
			'password'   => '',
		),
		'table_prefix' => 'ap_',
		'profiling' => true,
	),
);

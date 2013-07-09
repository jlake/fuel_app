<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2012 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * If you want to override the default configuration, add the keys you
 * want to change here, and assign new values to them.
 */

return array(
	'language'           => 'ja',
	'language_fallback'  => 'en',
	'locale'             => 'ja_JP',
	'encoding' => 'UTF-8',

	'server_gmt_offset'  =>  3600 * 9, //0,
	'default_timezone' => 'Asia/Tokyo',

	'profiling'  => (\Fuel::$env == \Fuel::DEVELOPMENT),
	'security' => array(
		'uri_filter'       => array('htmlentities'),
		'input_filter'  => array(),
		//'input_filter'  => array('Security::check_encoding'),
		'output_filter'  => array(),
		//'output_filter'  => array('Security::htmlentities'),
	),

	'always_load' => array(
		'packages' => array(
			'auth',
			'orm',
		),
	),
	'whitelisted_classes' => array(
		'Fuel\\Core\\Response',
		'Fuel\\Core\\View',
		'Fuel\\Core\\ViewModel',
		'Fuel\Core\Validation',
		'Closure',
	),
);

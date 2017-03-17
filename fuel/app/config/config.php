<?php
/**
 * Part of the Fuel framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

return array(
	'base_url'  => '/fuel/',

	'language'           => 'ja',
	'language_fallback'  => 'en',
	'locale'             => 'ja_JP',
	'encoding' => 'UTF-8',

	//'server_gmt_offset'  =>  3600 * 9, //0,
	'default_timezone' => 'Asia/Tokyo',

	//'profiling'  => (\Fuel::$env == \Fuel::DEVELOPMENT),
	'profiling'  => false,
	'security' => array(
		'uri_filter'       => array('htmlentities'),
		'output_filter'  => array('Security::htmlentities'),
		'whitelisted_classes' => array(
			'Fuel\\Core\\Presenter',
			'Fuel\\Core\\Response',
			'Fuel\\Core\\View',
			'Fuel\\Core\\ViewModel',
			'Closure',
		),
	),

	'module_paths' => array(
		APPPATH.'modules'.DS
	),

	'package_paths' => array(
		PKGPATH,
	),

	'always_load' => array(
		'packages' => array(
			'auth',
			'orm',
		),
	),

	'cookie' => array(
		'expiration'  => 0,
		'path'        => '/fuel/',
		'domain'      => null,
		'secure'      => false,
		'http_only'   => false,
	),
);

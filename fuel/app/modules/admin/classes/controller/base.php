<?php
/**
 * 管理画面ベースコントローラー.
 *
 * 共通処理はここに記入してください。
 *
 * @package  app
 * @module   admin
 * @extends  \Controller_Template
 */
namespace Admin;

class Controller_Base extends \Controller_Template
{
	public $template = 'layout';

	/**
	 * before method
	 */
	public function before()
	{
		parent::before();

		// TO-DO: before 共通処理
	}

	/**
	 * after method
	 */
	public function after($response)
	{
		$response = parent::after($response);

		// TO-DO: after 共通処理

		return $response;
	}
}

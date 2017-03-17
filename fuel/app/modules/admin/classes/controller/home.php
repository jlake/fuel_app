<?php
/**
 * 管理画面ホーム画面
 *
 * @package  app
 * @module   admin
 * @extends  Controller_Base
 */
namespace Admin;

class Controller_Home extends Controller_Base
{
	/**
	 * Top page of the site
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$this->template->title = 'ダッシュボード';
		$this->template->content = \View::forge('home/index');
	}

}

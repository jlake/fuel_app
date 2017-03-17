<?php
/**
 * ホーム画面コントローラー
 *
 * @package  app
 * @extends  Controller_Base
 */
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
		$this->template->title = 'TOPページ';
		$this->template->content = View::forge('home/index');
	}

	/**
	 * The 404 action for the application.
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		$this->template->title = 'エラー - ページが見つかりません';
		$this->template->content = View::forge('home/404');
	}
}

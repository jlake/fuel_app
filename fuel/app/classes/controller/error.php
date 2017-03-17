<?php
/**
 * 通常画面ベースコントローラー.
 *
 * 共通処理はここに記入してください。
 *
 * @package  app
 * @extends  Controller_Base
 */
class Controller_Error extends Controller_Base
{
	public $template = 'layout_error';

	/**
	 * 404 エラーページ
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		$this->template->title = 'エラー';
		$this->template->content = View::forge('error/404');
	}


}

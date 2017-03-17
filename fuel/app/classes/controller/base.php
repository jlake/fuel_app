<?php
/**
 * 通常画面ベースコントローラー.
 *
 * 共通処理はここに記入してください。
 *
 * @package  app
 * @extends  Controller_Template
 */
class Controller_Base extends Controller_Template
{
	public $template = 'layout';

	/**
	 * before method
	 */
	public function before()
	{
		// 多言語対応
		$this->set_system_language();

		parent::before();

		// TO-DO: before 共通処理
		//error_log('auth check: '. Auth::check());
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


	// システム言語をセットする  -- 2016/10/17 adore.ou 追加
	protected function set_system_language()
	{
		$lang = Input::param('lang');
		if(empty($lang)) {
			// パラメータで言語コードを渡されない場合
			$lang = Cookie::get('lang');
			if(empty($lang)) {
				if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
					$languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
					if (isset($languages[0]) && preg_match('/^en/i', $languages[0])) {
						$lang = 'en';
					} else  {
						$lang = 'ja';
					}
				} else  {
					$lang = 'ja';
				}
			}
		} else {
			// パラメータで言語コードを渡された場合
			Cookie::set('lang', $lang, 86400 * 365);
		}
		Config::set('language', $lang);
	}
}

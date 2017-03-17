<?php
/**
 * ファイルアップロードサンプル
 *
 * @package  app
 * @extends  Controller_Base
 */
class Controller_Upload extends Controller_Base
{
	public function action_index() {
		Response::redirect('upload/select');
	}

	public function action_select() {
		$this->template->title = "ファイル &raquo; 選択";
		$this->template->content = View::forge('upload/select');
	}

	public function action_uploaded() {

		Upload::process(array(
			'path' => Config::get('upload.path'),
			//'new_name' => 'hoge',
		));

		if (!Upload::is_valid()) {

			$errors = Upload::get_errors();

			Session::set_flash('error', $errors);

			Response::redirect('upload/index');
			return;
		}

		Upload::save();
		$this->template->title = "ファイル &raquo; アップロードしました";
		$this->template->content = View::forge('upload/uploaded');
		$this->template->content->set('files', Upload::get_files());
		$this->template->content->set('url_prefix', Config::get('upload.url_prefix'));
		$this->template->content->set_safe('upload_path', Config::get('upload.path')); // for DEBUG
	}
}

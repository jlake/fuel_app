<?php
class Controller_Files extends Controller_Template
{
	//public function __construct() {
	//}

	public function action_index() {
		Response::redirect('files/select');
	}

	public function action_select() {
		$this->template->title = "Files &raquo; Select";
		$this->template->content = View::forge('files/select');
	}

	public function action_upload() {

		Upload::process(array(
			'path' => Config::get('upload.path'),
			//'prefix' => 'test_',
		));

		if (!Upload::is_valid()) {
			$this->template->title = "Files &raquo; Select";
			$this->template->content = View::forge('files/select');

			$html_error = '';
			foreach (Upload::get_errors() as $error) {
				$html_error .= $error['errors'][0]['message'] . '<br />';
			}
			$this->template->content->set_safe('html_error', $html_error);
			return;
		}

		Upload::save();
		$this->template->title = "Files &raquo; Uploaded";
		$this->template->content = View::forge('files/upload');
		$this->template->content->set('files', Upload::get_files());
		$this->template->content->set_safe('uploadPath', Config::get('upload.path')); // for DEBUG
	}
}

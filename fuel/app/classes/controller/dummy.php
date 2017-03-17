<?php
/**
 * ダミー画面コントローラー
 *
 * @package  app
 * @extends  Controller_Base
 */
class Controller_Dummy extends Controller_Base
{

	public function action_index()
	{
		$config = array(
			'pagination_url' => \Uri::base() . 'dummy/index',
			'total_items' => Model_Dummy::count(),
			'per_page' => 10,
			//'uri_segment' => 3,
			//'uri_segment' => 'page',
			'num_links' => 10,
            /*
			'template' => array(
				'wrapper' => '<div class="pagination">{pagination}\n</div>\n',
			),
            */
		);

		// Create a pagination instance named 'bootstrap3'
		$pagination = Pagination::forge('bootstrap3', $config);

		$data['dummies'] = Model_Dummy::find('all',  array(
			'limit' => \Pagination::get('per_page'),
			'offset' => \Pagination::get('offset')
		));

		$data['pagination'] = $pagination->render();

		$view = View::forge('dummy/index', $data);
		//$view->set_safe('pagination', \Pagination::create_links());
        $view->set_safe('pagination', $pagination->render());

		$this->template->set_global('title', 'ダミーデータ一覧');
		$this->template->content = $view;
        
	}

	public function action_view($id = null)
	{
		$data['dummy'] = Model_Dummy::find($id);

		is_null($id) and Response::redirect('Dummy');

		$this->template->title = "ダミーデータ詳細";
		$this->template->content = View::forge('dummy/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST') {
			$val = Model_Dummy::validate('create');

			if ($val->run()) {
				$dummy = Model_Dummy::forge(array(
					'inf1' => Input::post('inf1'),
					'inf2' => Input::post('inf2'),
				));

				if ($dummy and $dummy->save()) {
					Session::set_flash('success', 'Added dummy #'.$dummy->id.'.');
					Response::redirect('dummy');
				} else {
					Session::set_flash('error', 'Could not save dummy.');
				}
			} else {
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "ダミー新規登録";
		$this->template->content = View::forge('dummy/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Dummy');

		$dummy = Model_Dummy::find($id);

		$val = Model_Dummy::validate('edit');

		if ($val->run()) {
			$dummy->inf1 = Input::post('inf1');
			$dummy->inf2 = Input::post('inf2');

			if ($dummy->save()) {
				Session::set_flash('success', 'Updated dummy #' . $id);

				Response::redirect('dummy');
			} else {
				Session::set_flash('error', 'Could not update dummy #' . $id);
			}
		} else {
			if (Input::method() == 'POST') {
				$dummy->inf1 = $val->validated('inf1');
				$dummy->inf2 = $val->validated('inf2');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('dummy', $dummy, false);
		}

		$this->template->title = "ダミーデータ一覧";
		$this->template->content = View::forge('dummy/edit');

	}

	public function action_delete($id = null)
	{
		if ($dummy = Model_Dummy::find($id)) {
			$dummy->delete();
			Session::set_flash('success', 'Deleted dummy #'.$id);
		} else {
			Session::set_flash('error', 'Could not delete dummy #'.$id);
		}

		Response::redirect('dummy');

	}


}
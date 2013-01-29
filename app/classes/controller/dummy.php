<?php
class Controller_Dummy extends Controller_Template 
{

	public function action_index()
	{
		$limit = 20;

		$config = array(
			'pagination_url' => \Uri::base(false) . 'dummy/index',
			'total_items' => \DB::count_records('dummies'),
			'per_page' => $limit,
			'uri_segment' => 2,
			'num_links' => 10,
			'template' => array(
			'wrapper_start' => '<div class="pagination"> ',
			'wrapper_end' => ' </div>',
			),
		);

		\Pagination::set_config($config);

		$data['dummies'] = Model_Dummy::find('all',  array(
			'limit' => $limit, 
			'offset' => \Pagination::get('offset')
		));
		$view = View::forge('dummy/index', $data);
		$view->set_safe('pagination', \Pagination::create_links());

		$this->template->title = "Dummies";
		$this->template->content = $view;

	}

	public function action_view($id = null)
	{
		$data['dummy'] = Model_Dummy::find($id);

		is_null($id) and Response::redirect('Dummy');

		$this->template->title = "Dummy";
		$this->template->content = View::forge('dummy/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Dummy::validate('create');

			if ($val->run())
			{
				$dummy = Model_Dummy::forge(array(
					'col1' => Input::post('col1'),
					'col2' => Input::post('col2'),
					'user_id' => Input::post('user_id'),
				));

				if ($dummy and $dummy->save())
				{
					Session::set_flash('success', 'Added dummy #'.$dummy->id.'.');

					Response::redirect('dummy');
				}

				else
				{
					Session::set_flash('error', 'Could not save dummy.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Dummies";
		$this->template->content = View::forge('dummy/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Dummy');

		$dummy = Model_Dummy::find($id);

		$val = Model_Dummy::validate('edit');

		if ($val->run())
		{
			$dummy->col1 = Input::post('col1');
			$dummy->col2 = Input::post('col2');
			$dummy->user_id = Input::post('user_id');

			if ($dummy->save())
			{
				Session::set_flash('success', 'Updated dummy #' . $id);

				Response::redirect('dummy');
			}

			else
			{
				Session::set_flash('error', 'Could not update dummy #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$dummy->col1 = $val->validated('col1');
				$dummy->col2 = $val->validated('col2');
				$dummy->user_id = $val->validated('user_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('dummy', $dummy, false);
		}

		$this->template->title = "Dummies";
		$this->template->content = View::forge('dummy/edit');

	}

	public function action_delete($id = null)
	{
		if ($dummy = Model_Dummy::find($id))
		{
			$dummy->delete();

			Session::set_flash('success', 'Deleted dummy #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete dummy #'.$id);
		}

		Response::redirect('dummy');

	}


}
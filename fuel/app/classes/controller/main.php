<?php

class Controller_Main extends Controller_Template
{

	/**
	 * Top page of the site
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$this->template->title = 'Top Page';
		$this->template->content = View::forge('main/index');
	}

	/**
	 * The 404 action for the application.
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		$this->template->title = 'Error - Page not found';
		$this->template->content = View::forge('main/404');
	}
}

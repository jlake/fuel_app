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
		$messages = array('Aw, crap!', 'Bloody Hell!', 'Uh Oh!', 'Nope, not here.', 'Huh?');
		$this->template->content = View::forge('main/404', array('title' => $messages[array_rand($messages)]));
	}
}

<?php

class Controller_Api extends Controller_Rest
{

	public function get_index()
	{
		return array(
			'ver' => '1.0',
			'message' => 'Hello world!'
		);
	}

	public function get_dummy($id = null)
	{
		return Model_Dummy::find($id)->to_array();
	}

}
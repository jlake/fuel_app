<?php
/**
 * APIサンプル
 *
 * @package  app
 * @module   api
 * @extends  Controller_Base
 */
namespace Api;

class Controller_Sample extends Controller_Base
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
		return \Model_Dummy::find($id)->to_array();
	}

}

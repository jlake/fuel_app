<?php
use Orm\Model;

class Model_Dummy extends Model
{
	protected static $_table_name = 'u_dummies';

	protected static $_properties = array(
		'id',
		'inf1',
		'inf2',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('inf1', 'Inf1', 'required|max_length[255]');
		$val->add_field('inf2', 'Inf2', 'required');

		return $val;
	}

}

<?php

class Model_User extends \Orm\Model
{
	protected static $_has_many = array('posts', 'comments');

	protected static $_properties = array(
		'id',
		'username',
		'password',
		'group_id',
		'email',
		'last_login',
		'login_hash',
		'profile_fields'
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);
}
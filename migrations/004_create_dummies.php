<?php

namespace Fuel\Migrations;

class Create_dummies
{
	public function up()
	{
		\DBUtil::create_table('dummies', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'col1' => array('constraint' => 255, 'type' => 'varchar'),
			'col2' => array('type' => 'text'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('dummies');
	}
}
<?php
/**
 * Dummy task
 */

namespace Fuel\Tasks;

class Dummy
{
	/**
	 * get dummy record by id.
	 *
	 * def
	 *
	 * @return string
	 */
	public static function run($id = 1)
	{
		return "Usage:\n"
			. "php oil dummy:one\n"
			. "php oil dummy:one 2\n"
			. "php oil dummy:all\n"
			. "php oil dummy:all 10\n"
			. "php oil dummy:all 10 20\n"
		;
	}


	/**
	 * get dummy record by id.
	 *
	 * Usage (from command line):
	 *
	 * php oil r dummy
	 * or
	 * php oil r dummy 2
	 *
	 * @return string
	 */
	public static function one($id = 1)
	{
		$dummy = \Model_Dummy::find($id)->to_array();
		print_r($dummy);
		return "id: $id";
	}

	/**
	 * get dummy records by count.
	 *
	 * Usage (from command line):
	 *
	 * php oil r dummy:all
	 * or
	 * php oil r dummy:all 20 10
	 *
	 * @return string
	 */
	public static function all($limit = 5, $offset = 0)
	{
		$options = array(
			'limit' => $limit,
			'offset' => $offset
		);
		$dummies = \Model_Dummy::find('all', $options);
		foreach($dummies as $dummy) {
			print_r($dummy->to_array());
		}
		return "limit: $limit, offset: $offset";
	}
}

/* End of file tasks/dummy.php */

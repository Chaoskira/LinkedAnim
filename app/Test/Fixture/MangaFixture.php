<?php
/**
 * MangaFixture
 *
 */
class MangaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'origin_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'editions_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'types_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'start_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'end_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'season_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2),
		'episode_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
		'coverage' => array('type' => 'binary', 'null' => false, 'default' => null),
		'tome_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
		'authors_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kinds_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'kid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kids' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'origin_name' => 'Lorem ipsum dolor sit amet',
			'editions_id' => 1,
			'types_id' => 1,
			'start_date' => '2014-05-09',
			'end_date' => '2014-05-09',
			'season_number' => 1,
			'episode_number' => 1,
			'coverage' => 'Lorem ipsum dolor sit amet',
			'tome_number' => 1,
			'authors_id' => 1,
			'status' => 'Lorem ipsum dolor sit a',
			'kinds_id' => 1,
			'kid' => 'Lorem ipsum dolor sit a',
			'kids' => 'Lorem ipsum dolor sit a'
		),
	);

}

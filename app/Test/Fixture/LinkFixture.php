<?php
/**
 * LinkFixture
 *
 */
class LinkFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'key' => 'primary'),
		'mangas_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'mid' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
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
			'mangas_id' => 1,
			'mid' => 1,
			'number' => 1
		),
	);

}

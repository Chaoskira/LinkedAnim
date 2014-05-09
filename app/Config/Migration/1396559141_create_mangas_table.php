<?php
class CreateMangasTable extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'mangas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'origin_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'table_editions_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
					'table_types_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
					'table_kinds_id1' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
					'table_kinds_id2' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
					'table_kinds_id3' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
					'start_date' => array('type' => 'date', 'null' => false, 'default' => null),
					'end_date' => array('type' => 'date', 'null' => false, 'default' => null),
					'season_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2),
					'episode_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
					'coverage' => array('type' => 'binary', 'null' => false, 'default' => null),
					'tome_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
					'table_authors_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
					'status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'mangas'
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 */
	public function after($direction) {
		return true;
	}
}

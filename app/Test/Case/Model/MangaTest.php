<?php
App::uses('Manga', 'Model');

/**
 * Manga Test Case
 *
 */
class MangaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.manga',
		'app.editions',
		'app.types',
		'app.authors',
		'app.kinds'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Manga = ClassRegistry::init('Manga');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Manga);

		parent::tearDown();
	}

}

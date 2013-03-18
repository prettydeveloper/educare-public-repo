<?php
/**
 * EventFixture
 *
 */
class EventFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'start_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'end_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'is_common' => array('type' => 'boolean', 'null' => true, 'default' => '1'),
		'is_meeting' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'is_laboratory' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'is_exam' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'trashed' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'trashed_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'note' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 512, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'start_date' => '2013-03-18 12:54:23',
			'end_date' => '2013-03-18 12:54:23',
			'is_common' => 1,
			'is_meeting' => 1,
			'is_laboratory' => 1,
			'is_exam' => 1,
			'created' => '2013-03-18 12:54:23',
			'modified' => '2013-03-18 12:54:23',
			'trashed' => '2013-03-18 12:54:23',
			'created_by' => 1,
			'modified_by' => 1,
			'trashed_by' => 1,
			'note' => 'Lorem ipsum dolor sit amet'
		),
	);

}

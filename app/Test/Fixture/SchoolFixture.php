<?php
/**
 * SchoolFixture
 *
 */
class SchoolFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'school_code' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'zipcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'city' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'state' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'phone_number_1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'phone_number_2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'trashed' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'trashed_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'note' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 511, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'school_code' => 1,
			'address' => 'Lorem ipsum dolor sit amet',
			'zipcode' => 'Lorem ip',
			'city' => 'Lorem ipsum dolor sit amet',
			'state' => 'Lorem ip',
			'phone_number_1' => 'Lorem ipsum d',
			'phone_number_2' => 'Lorem ipsum d',
			'created' => '2013-03-18 18:05:38',
			'modified' => '2013-03-18 18:05:38',
			'trashed' => '2013-03-18 18:05:38',
			'created_by' => 1,
			'modified_by' => 1,
			'trashed_by' => 1,
			'note' => 'Lorem ipsum dolor sit amet'
		),
	);

}

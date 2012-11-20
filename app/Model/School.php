<?php
App::uses('AppModel', 'Model');
/**
 * School Model
 *
 * @property Class $Class
 */
class School extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	public $hasMany = 'Grade';

}

<?php
App::uses('AppModel', 'Model');
/**
 * Observator Model
 *
 * @property Laboratory $Laboratory
 * @property Meeting $Meeting
 */
class Observator extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'observation_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Laboratory' => array(
			'className' => 'Laboratory',
			'foreignKey' => 'laboratory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Meeting' => array(
			'className' => 'Meeting',
			'foreignKey' => 'meeting_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function getLaboratoryObservator($laboratory_id, $date) {
		$conditions = array(
            'laboratory_id' => $laboratory_id,
            'observation_date' => DATE($date)
        );
        return $this->find('first', compact('conditions'));
	}
}

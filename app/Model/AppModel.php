<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

/** 
 *	saveRecord method
 *	extends the save method to collect informations on who edited what
 *
 *	@param string $user_id the ID of the user updating the data
 *
 */

	public function saveRecord($data = null, $user_id = null, $validate = true, $fieldList = array()) {
        $this->set($data);
        if (isset($user_id)) {
	        if (!isset($this->data[$this->alias]['created_by'])) {
	            $this->data[$this->alias]['created_by'] = $user_id;
	        }
	        $this->data[$this->alias]['modified_by'] = $user_id;
	    }
        return parent::save($this->data, $validate, $fieldList);
    }
}

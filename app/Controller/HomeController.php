<?php
/**
 * Static content controller.
 *
 * This file will render the home page view
 *
 * @copyright     Copyright 2012, Lucia Moreno (http://prettydeveloper.com)
 * @package       app.Controller
 * @since         EduAid v 0.1
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

class HomeController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Home';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function display() {
		
	}
}

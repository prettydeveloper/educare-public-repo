<?php
App::uses('AppController', 'Controller');
/**
 * Attendances Controller
 *
 * @property Attendance $Attendance
 */
class AttendancesController extends AppController {

	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

	public $scaffold;

	/**
 	* Displays a table to take attendances
 	*
 	* @param mixed What page to display
 	* @return void
 	*/

	/*public function take() {
		$this->loadModel('Student');
		$this->Attendance->create();
		$this->set('students', $this->Student->find('all'));
	}*/

	public function take() {
			// Has any form data been POSTed?
		    if ($this->request->is('post')) {
		        // If the form data can be validated and saved...
		        $this->Attendance->create();

		        foreach ($this->request->data['Attendance'] as $attendance): 
		        	if( $attendance['absent'] == true || $attendance['late'] == true)
		        		$this->Attendance->save($attendance);
		        	else if( $attendance['absent'] == false && $attendance['late'] == false )
		        		$this->Attendance->delete($attendance);
		        endforeach;

		        //if ($this->Attendance->saveMany($this->request->data['Attendance'], array('Attendance.absent' => true))) {

		            // Set a session flash message and redirect.
		            // debug($this->request->data, true , true);
		            $this->Session->setFlash('Presenze salvate!');
		            //$this->redirect('/attendances/take');
		        //}
		    }

		    // If no form data, find the students with attendance to be edited
		    // and hand it to the view.
		    $this->loadModel('Student');
		    $this->set('students', $this->Student->find('all'));
	}
}

?>
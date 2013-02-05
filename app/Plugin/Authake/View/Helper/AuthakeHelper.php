<?php
/*
    This file is part of Authake.

    Author: Jérôme Combaz (jakecake/velay.greta.fr)
    Contributors:

    Authake is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Authake is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
*/

class AuthakeHelper extends AppHelper {
  
    var $helpers = array('Session','Authake.Gravatar','Html');

    function getUserId() {
        return $this->Session->read('Authake.id');
    }

    function getUserEmail() {
        return $this->Session->read('Authake.email');
    }

    function getUserMenu() {
	
 	if($this->getLogin()){
		$output = '<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.
			$this->Gravatar->get_gravatar($this->getUserEmail(),18,'','',true).'&nbsp;'. 
			$this->getLogin().'<b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="'.$this->Html->url( array('controller'=>'user','action'=>'index')).'">Profile Settings</a></li>
				<li class="divider"></li>
				<li>'.$this->Html->link(__('Logout'), array('controller'=> 'user', 'action'=>'logout')).'</li>
			</ul>
		</li>';
		}
		else
		{
		$output = '<li>'.$this->Html->link(__('Login'), array('controller'=> 'user', 'action'=>'login')).'</li>';
		}
        return $output;
    }

    function isLogged() {
        return ($this->getUserId() !== null);
    }

    function getLogin() {
        return $this->Session->read('Authake.login');
    }

    function getGroupIds() {
        $gid = $this->Session->read('Authake.group_ids');
        return (empty($gid) ? array(0) : $gid);
    }

    function getGroupNames() {
        $gn = $this->Session->read('Authake.group_names');
        return (is_array($gn) ? $gn : array(__('Guest')));
    }

    function isMemberOf($gid) {
        return in_array($gid, $this->getGroupIds());
    }
   
}
    
?>
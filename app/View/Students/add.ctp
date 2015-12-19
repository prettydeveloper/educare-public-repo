<script type="text/javascript">
    $(document).ready(function() {
        // enabling datepicker
        $('.datepicker').datepicker({ format:'dd-mm-yyyy', language:'it' });
        updateGrades();
    });

    function updateGrades(){
    	var school_id = $('#StudentSchoolId').val();
    	var path='<?php echo $this->webroot ?>';
    	$.ajax({
    		url: path+'Students/update_grades/'+school_id,
    		dataType: 'json'
    	}).done(function(data) {
    		$('#StudentGradeId').empty();
    		$('#StudentGradeId').removeAttr('disabled');
    		$.each(data, function(index, grade){
    			var option = '<option value="'+grade.Grade.id+'">'+grade.Grade.grade_number+grade.Grade.grade_code+'</option>'
    			//console.log(option);
    			$('#StudentGradeId').append(option);
    		});
    	});
    }

</script>

<div class="row-fluid">
	<div id="actions" class="span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Attendances'), array('controller' => 'attendances', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Attendance'), array('controller' => 'attendances', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<div id="student" class="span10">
		<?php echo $this->Form->create('Student'); ?>
			<fieldset>
				<legend><?php echo __('Add Student'); ?></legend>
			<?php
				echo $this->Form->input('first_name');
				echo $this->Form->input('last_name');
				echo $this->Form->input('school_id', array('onchange' => 'updateGrades()'));
				echo $this->Form->input('grade_id', array('type' => 'select', 'disabled' => 'true'));
				echo $this->Form->input('date_of_birth', array(	'dateFormat' => 'DMY',
															    'minYear' => date('Y') - 30,
															    'maxYear' => date('Y') - 6,));
				echo $this->Form->input('address');
				echo $this->Form->input('zipcode');
				echo $this->Form->input('city');
				echo $this->Form->input('state');
				echo $this->Form->input('phone_number_1');
				echo $this->Form->input('phone_number_2');
				echo $this->Form->input('phone_number_3');
				//echo $this->Form->input('trashed');
				//echo $this->Form->input('created_by');
				//echo $this->Form->input('modified_by');
				//echo $this->Form->input('trashed_by');
				echo $this->Form->input('note', array('type' => 'textarea', 'class' => 'note'));
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>

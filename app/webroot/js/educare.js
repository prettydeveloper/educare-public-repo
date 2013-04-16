 /* LABORATORY ATTENDANCES FUNCTIONS */
 function checkPresence(id){
        if($('#LaboratoryAttendance'+id+'Present').is(':checked')){
            $('#student'+id).css('background-color', '#CCFFCE');
            $('#LaboratoryAttendance'+id+'Absent').attr('checked',false);
            $('#LaboratoryAttendance'+id+'Late').attr('checked',false);
        } else {
            $('#student'+id).css('background-color', '');
        }
    }


    function checkAbsence(id){
        if($('#LaboratoryAttendance'+id+'Absent').is(':checked')){
            $('#student'+id).css('background-color', '#FFCCCC');
            $('#LaboratoryAttendance'+id+'Present').attr('checked',false);
            $('#LaboratoryAttendance'+id+'Late').attr('checked',false);
        }else{
            $('#student'+id).css('background-color', '');
        }
    }

    function checkLate(id){
        if($('#LaboratoryAttendance'+id+'Late').is(':checked')){
            $('#student'+id).css('background-color', '#FFCC99');
            $('#LaboratoryAttendance'+id+'Present').attr('checked',false);
            $('#LaboratoryAttendance'+id+'Absent').attr('checked',false); 
        }else{
            $('#student'+id).css('background-color', '');
        }
    }

    function checkEmployeePresence(id){
        if($('#LaboratoryAttendance'+id+'Present').is(':checked')){
            $('#student'+id).css('background-color', '#CCFFCE');
            $('#LaboratoryAttendance'+id+'Absent').attr('checked',false);
            $('#LaboratoryAttendance'+id+'Late').attr('checked',false);
        } else {
            $('#student'+id).css('background-color', '');
        }
    }

    function submitDate(){
        var date = $('#attendance_date').val();
        var grade_id = <?php echo $grade['Grade']['id']?>;
        var laboratory_id = <?php echo $laboratory['Laboratory']['id']?>;
        //alert('attendances/take/'+grade_id+'/'+date);
        var path=<?php echo $this->webroot ?>;
        if(date)
        window.location.href = path+'laboratoryAttendances/take/'+grade_id+'/'+laboratory_id+'/'+date;
    }

    function showGrades(){
        $('#grades').show('slow');
        $('#laboratories').hide('slow');
    }

    function showLaboratories(){
        $('#laboratories').show('slow');
    }
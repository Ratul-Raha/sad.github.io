<?php
include_once("../dbcon.php");
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {	
	$update_field='';
	if(isset($input['date'])) {
		$update_field.= "date='".$input['date']."'";
	} else if(isset($input['total schedule'])) {
		$update_field.= "total schedule='".$input['total schedule']."'";
	} else if(isset($input['completed'])) {
		$update_field.= "completed='".$input['completed']."'";
	} else if(isset($input['incomplete'])) {
		$update_field.= "incomplete='".$input['incomplete']."'";
	} else if(isset($input['total payment'])) {
		$update_field.= "total payment='".$input['total payment']."'";
	} else if(isset($input['paid'])) {
		$update_field.= "paid='".$input['paid']."'";
	} else if(isset($input['duet'])) {
		$update_field.= "due='".$input['due']."'";
	} else if(isset($input['total paid'])) {
		$update_field.= "total paid='".$input['total paid']."'";
	} else if(isset($input['total due'])) {
		$update_field.= "total due='".$input['total due']."'";
	}	
	
	
}



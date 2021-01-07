$(document).ready(function(){
	$('#data_table').Tabledit({
		deleteButton: false,
		editButton: false,   		
		columns: {
		  identifier: [0, 'date'],                    
		  editable: [[1, 'date'], [2, 'total schedule'], [3, 'completed'], [4, 'incomplete'], [5, 'total payment'], [6, 'paid'], [7, 'due'], [8, 'total paid'], [9, 'total due']]
		},
		hideIdentifier: false,
		url: 'live_edit.php'		
	});
});
$(document).ready(function() {
	
	var modal_label = '';
	var parent_form_id = '';
	$('.modal_btn').click(function(){
		modal_label = $(this).attr('label');
		parent_form_id = $(this).attr('parent_form_id');
		$('.modal-body').load($(this).attr('href'), function(){
	        $('#myModal').modal({show:true});
	        $('#tableReq').DataTable();
	        $('#modal_title').html('Advance Search - '+modal_label)
	        $('#htextFormID').val(parent_form_id)
	    });
	});

    $('#calTransactionDate').datetimepicker({
        format: 'YYYY-MM-DD'
    });
});


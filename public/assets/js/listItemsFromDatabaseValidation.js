$(function () {
	$(document).on("click", "#btnAddDateAndTime", function () {
		$dateFrom = $('#chooseDateFrom').val();
		$dateTo = $('#chooseDateTo').val();
		$absence = $('#chooseTypeOfAbsence').val();
		$approver = $('#chooseTypeOfApprover').val();
		$description = $('#descriptionArea').val();
		$file = $('#uploadFile').val();
		if ($dateFrom !== "" && $dateTo !== "" && $absence !== "Choose type" && $approver !== "Choose type") {
			$('#chooseDateFrom').val("");
			$('#chooseDateTo').val("");
			$('#chooseTypeOfAbsence').val("");
			$('#chooseTypeOfApprover').val("");
			$('#chooseTypeOfApprover').val("");
			$('#descriptionArea').val("");
			$('#uploadFile').val("");
			$('#messageWrongFields').text("");
		} else {
			$('#messageWrongFields').text("Fields with * are required!")
					.css("color", "tomato")
					.css("font-size", "22px");
		}
	});
});
$('.dropify').dropify({
    messages: {
        'default': 'Drag and drop a file here or click',
        'replace': 'Drag and drop or click to replace',
        'remove': 'Remove',
        'error': 'Ooops, something wrong appended.'
    },
    error: {
        'fileSize': 'The file size is too big (1M max).'
    }
});
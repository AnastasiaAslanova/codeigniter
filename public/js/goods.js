$(document).ready( function () {
	$('.good').click( function(event) {
		event.preventDefault();
		var $this = $(this);
		var good_id = $(this).attr("good_id");
		if(confirm("Are you sure you want to delete the entry?")) {
			var ajxReq = $.ajax({
				url: 'http://codeigny.test/goods/' + good_id,
				type: 'DELETE',
			});
			ajxReq.success(function (data, status, jqXhr) {
				$this.parents('tr').remove();
			});
			ajxReq.error(function (jqXhr, textStatus, errorMessage) {
				alert("Request is Fail.");
			});
		}

	});

	$('#select').on("change", function (){
		$.ajax({
			type: "GET",
			url: "http://codeigny.test/list",
			data: {id_category:$(this).val()},
			success: function(html){
				$('#table').replaceWith(html)
			}
		});
		return false;
	})

	$('#status').on("change", function (){
		$.ajax({
			type: "GET",
			url: "http://codeigny.test/list",
			data: {status:$(this).val()},
			success: function(html){
				$('#table').replaceWith(html)
			}
		});
		return false;
	})

	$('.status').change(function() {
		$.ajax({
			type: "POST",
			url: "http://codeigny.test/change",
			data: {
				good_id: $(this).parents('tr').attr("good_id"),
				checked: $(this).is(':checked') ? 1 : 0
			},
			success: function () {
			}
		});
	});

});

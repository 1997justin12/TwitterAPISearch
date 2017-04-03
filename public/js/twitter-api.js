$(document).ready(function(){

	$('#btn-search').click(function(){
		var $searchName = $("#input-search").val();
		var $search = $.ajax({
			url : './search/'+$searchName,
			method : 'get'
		});

		$search.done(function(result){
			console.log(result);
		});

		$search.fail(function(error, message){
			console.log("Request Failed: " + message);
		});
	});



});
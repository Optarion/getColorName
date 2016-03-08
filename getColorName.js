$(document).ready(function(){

	$.ajax({
		url: 'http://localhost:8080/testTram/getColorName.php',
		data: 'html',
		success: function(data){
			console.log(data);
		}
	})
})

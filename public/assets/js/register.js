$('#registerbtn').click(function (e){
	console.log("I was clicked");
	e.preventDefault();
	let form = $('#registerform');
	$.ajax({
		type:'post',
		url:'/registerUser',
		data:form.serialize(),
		dataType: "json",

	});
	success: function success(){
		console.log("status", data);
	}
});

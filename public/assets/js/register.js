 $('#registerbtn').click(function (e){
	console.log("I was clicked");
	e.preventDefault();
	let form = $('#registerform');
	$.ajax({
		type:'post',
		url:'/registerUser',
		data:form.serialize(),
		dataType: "json",

	success: function(data){
		console.log("status", data);
		   if(data.status=='ok') {
                $('#name').val('');
                $('#email').val('');
                $('#password').val('');
                $('#phone').val('');
                

                window.location.reload(true);

            }
	},
});
});

  $('#loginBtn').click(function (e){
	console.log("I was clicked");
	e.preventDefault();
	let form = $('#loginForm');
	$.ajax({
		type:'post',
		url:'/sampleuser',
		data:form.serialize(),
		dataType: "json",

	success: function(data){
		console.log("status", data);
		  

	},
});
});

  
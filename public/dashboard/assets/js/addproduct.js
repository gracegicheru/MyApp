$('#saveProducts').click(function(e){
	e.preventDefault();
	console.log('i have been clicked');

	$.ajax({
		type:'POST',
		url:'/addProducts',
		  headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
		data:{
			'name':$('input[id=name]').val(),
			'price':$('input[id=price]').val(),
			'stock':$('input[id=stock]').val(),
			'description':$('textarea[id=description]').val(),
			'product_id':$('input[id=product_id]').val(),
					},
        dataType: "json",

        success: function success(data){
        	console.log('success', data);
        }
	});


});
$('#submitButton').click(function(e){
	e.preventDefault();
	console.log('i have been clicked');
	let form= $('#productsForm');

	$.ajax({
		 type: "POST",
        url: "/addProducts",
          headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
        data:{
			'name':$('input[id=name]').val(),
			'price':$('input[id=price]').val(),
			'stock':$('input[id=stock]').val(),
			'description':$('textarea[id=description]').val(),
			'product_id':$('input[id=product_id]').val(),
			'image':$('input[id=image]').val(),
				
        },
        dataType: "json",

          success: function(data) {
            // console.log(data);
            if(data.status=='ok') {
                $('#name').val('');
                $('#price').val('');
                $('#description').val('');
                $('#stock').val('');
               

                window.location.reload(true);

            }

        },
        error:function(xhr, errmsg, err){
            // console.log('error', xhr);
            // console.log('status', errmsg);
            // console.log('err', err);

        }



});

});


 $('.delete').click(function(){
 	console.log("this");
	 let id=$(this).prop('id');
	 console.log(id);
	 // var delId= id.substring(3, 5);
	 // console.log("delId",delId);

	 // var rowId= "#tr" + delId;
	 // console.log("rowId", rowId);
  //    var rows;
	     $.ajax({
         type: 'post',
         url: '/delete',
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         data:{
             id:id
	 
         },
         success:function(data){
             console.log("data", data);
             console.log("item", rowId);
             
             // if(data.status=="success"){
             // 	console.log("statusOk", rowId);
             // 	 $( rowId ).remove();
	 
             // }
	 
         },
         error:function(xhr, errmsg, err){
	 
             console.log("mistake ajax");
             //alert("something went wrong");
             console.log("error", xhr);
             console.log("register", errmsg);
             console.log("wrong", err)
	 
         }
     });



	 });
 function editProducts(name, price,description, stock){
    $('#name1').val(name);
    $('#price1').val(price);
    $('#description1').val(description);
    $('#stock1').val(stock);
    $('#id').val(id);

}
$('.editButton').click(function(e){
    e.preventDefault();
    console.log('This');
    let id=$(this).prop('id');
    console.log(id);
    let form= $('#editProductsForm');
   
    $.ajax({
        type:'POST',
        url:'/editProduct',
           headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
        data:form.serialize(),id,

        success:function(data){
            console.log('data', data);
            if(data.status=='ok'){

            }

        },
        error:function(xhr, errmsg,err){
            console.log('error', xhr);
            console.log('status', errmsg);
            console.log('err', err);

        }

    });
});

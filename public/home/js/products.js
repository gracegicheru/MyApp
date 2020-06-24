$('#submitButton').click(function(e){
	e.preventDefault();
	console.log('i have been clicked');
	let form= $('#productsForm');

	$.ajax({
		 type: "POST",
        url: "/addProducts",
        data: form.serialize(),
        dataType: "json",



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

$('#submitButton').click(function(e){
    e.preventDefault();
    // let form = $("#productsForm");
    console.log("this");

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
            'image':$('input[id=image]').val(),
                    },
        dataType: "json",
        beforeSend: function(){

        },
        success: function(data) {
            
            
            if(data.status=='ok') {

                Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'A product has been added',
  showConfirmButton: false,
  timer: 3000
})
                $('#name').val('');
                $('#price').val('');
                $('#stock').val('');
                $('#description').val('');
                $('#product_id').val('');
                

                window.location.reload(true);
   }

            

        },
        error:function(xhr, errmsg, err){
            console.log('error', xhr);
            console.log('status', errmsg);
            console.log('err', err);
        //      $.each(xhr.errors, function(key, val){
        //                     console.log( "subject",key, val);
        //                     $('.alert-danger').show();
        //                     $('.alert-danger').append('<p>'+value+'</p>');
        //                 });

        }



    });
});

$('.deleteProduct').click(function(){

     
Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})


    console.log('this');
    let id=$(this).prop('id');
    console.log("id", id);
    var delId= id.substring(3, 5);
    console.log("delId",delId);
    console.log(id);
    var rowId= "#tr" + delId;
    console.log("rowId", rowId);



    $.ajax({
        type:'POST',
        url:'/delete',
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
        data: {
           
            delId
        },

        success:function(data){
            console.log('success', data);
            console.log("item", rowId);
            if(data.status=="success"){
                console.log("statusOk", rowId);
                $( rowId ).remove();

            }

        },
        error:function(xhr,errmsg,err){
            console.log('error', xhr);
            console.log('status', errmsg);
            console.log('err', err);

        }
    });
});

function editProducts(name,price,description,stock,id){
    $('#name1').val(name);
    $('#price1').val(price);
    $('#description1').val(description);
    $('#stock1').val(stock);
    $('#id').val(id);

}

$('.submitEditBtn').click(function(e){
    e.preventDefault();
    console.log('This');
    let id=$(this).prop('id');
    console.log(id);

    $.ajax({
        type:'POST',
        url:'/editProduct',
          headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
        data:{
            'id':$('#id').val(),
            'name1':$('input[id=name1]').val(),
            'price1':$('input[id=price1]').val(),
            'stock1':$('input[id=stock1]').val(),
            'description1':$('textarea[id=description1]').val(),
             
    },

        success:function(data){
            console.log('data', data);
                       
            if(data.status=='ok'){
                 window.location.reload(true);


            }


        },
        error:function(xhr, errmsg,err){
            console.log('error', xhr);
            console.log('status', errmsg);
            console.log('err', err);

        }

    });
});
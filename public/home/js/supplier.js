$('#submitBtn').click(function(e){
    e.preventDefault();
    let form = $("#supplierForm");
    console.log("this");

    $.ajax({
        type:'POST',
        url:'/addsupplier',
        data: form.serialize(),
        dataType: "json",
        beforeSend: function(){

        },
        success: function(data) {
            // console.log(data);
            if(data.status=='ok') {
                $('#name').val('');
                $('#email').val('');
                $('#password').val('');
                $('#phone').val('');
                $('#store_name').val('');
                $('#company_reg').val('');

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
$('.deleteSuplier').click(function(){
    console.log('this');
    let id=$(this).prop('id');
    var delId= id.substring(3, 5);
    console.log("delId",delId);
    console.log(id);
    var rowId= "#tr" + delId;
    console.log("rowId", rowId);



    $.ajax({
        type:'POST',
        url:'/deletesupplier',
        data: {
            "_token": $('#token').val(),
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

function editSupplier(name, email,password, phone,store_name, company_reg,id){
    $('#name1').val(name);
    $('#email1').val(email);
    $('#password1').val(password);
    $('#phone1').val(phone);
    $('#store_name1').val(store_name);
    $('#company_reg1').val(company_reg);
    $('#id').val(id);


}
$('.submitEditBtn').click(function(e){
    e.preventDefault();
    console.log('This');
    let id=$(this).prop('id');
    console.log(id);
    let form = $('#editSupplierForm');
    $.ajax({
        type:'POST',
        url:'/editsupplier',
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

    })
});
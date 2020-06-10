$('#submitBtn').click(function(e){
	e.preventDefault();
	console.log("i have been clicked");
	 let form = $("#loginForm");
    
    $.ajax({
        type: "POST",
        url: "/loginUser",
        data: form.serialize(),
        dataType: "json",
        // beforeSend: function(){
        //     btn.prop("disabled", true).html('<i class="fa fa-spinner fa-spin"></i> Please wait');
        //     $("#msgbx").removeClass("alert alert-danger").html("");
        // },
        success: function(data){
            console.log(data);
            // var errorMsg= data.message;
            // $("#notification").show();
            // $("#error").html(errorMsg);
            //console.log("error", errorMsg)
             if(data.status == "ok"){
               
                $("#logindiv").removeClass('show');
                $("#logindiv").addClass('hide');
                $("#otpdiv").removeClass('hide');
                $("#otpdiv").addClass('show');
                            }else{
                
            }
        },
        error: function(){
            // btn.prop("disabled", false).html('Log In');
            //Show error message
        }
    });

});

$("#VerifyBtn").click(function(event){
    let form = $("#loginForm");
    event.preventDefault();


    $.ajax({
        type: "POST",
        url: "/otpSubmit",
        data: form.serialize(),
        dataType: "json",
        success: function(data){


            if(data.status == "ok") {
                // window.location.href = "/";
                console.log("success", data);

            }
        },
        error: function(xhr,errmsg,err){


            console.log("error", errmsg);
        }

    });
});

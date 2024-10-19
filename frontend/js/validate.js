$("#loginFrm").on("submit", function() {
	var valid = true,
        message = '';

    if($("[name=phone_no]").val() == '') {
    	$("[name=phone_no]").parent().addClass("has-error");
    	$("[name=phone_no]").siblings("span").css("display","block");
    	valid = false;
    }

    return valid;
})
$("#otpFrm").on("submit", function() {
	
	var valid = true;
    var $d_1 = $("#digit-1").val();
    var $d_2 = $("#digit-2").val();
    var $d_3 = $("#digit-3").val();
    var $d_4 = $("#digit-4").val();
    var $d_5 = $("#digit-5").val();
    var $d_6 = $("#digit-6").val();

    if ($d_1 == '' || $d_2 == '' || $d_3 == '' || $d_4 == '' || $d_5 == '' || $d_6 == '') {
    	$("#otpErr").css("display","block");
    	valid = false;
    }
    return valid;
})
$("#createAccFrm").on("submit", function() {
	console.log($("[name=c_title]").val());
	var valid = true;
    
    if ($("[name=c_title]").val() == 'Title') {
    	$("[name=c_title]").parent().addClass("has-error");
    	$("[name=c_title]").siblings("span").css("display","block");
    	valid = false;
    }

    if ($("[name=name]").val() == '') {
    	$("[name=name]").parent().addClass("has-error");
    	$("[name=name]").siblings("span").css("display","block");
    	valid = false;
    }

    if ($("[name=u_surname]").val() == '') {
    	$("[name=u_surname]").parent().addClass("has-error");
    	$("[name=u_surname]").siblings("span").css("display","block");
    	valid = false;
    }

    if ($("[name=email]").val() == '') {
    	$("[name=email]").parent().addClass("has-error");
    	$("[name=email]").siblings("span").css("display","block");
    	valid = false;
    }

    if ($("[name=phone]").val() == '') {
    	$("[name=phone]").parent().addClass("has-error");
    	$("[name=phone]").siblings("span").css("display","block");
    	valid = false;
    }

    return valid;
})
$("#reviewFrm").on("submit", function() {
    var valid = true,
        error = 0;

    $inputs = $(".form-group");
    $inputs.each(function(){
        if ($(this).hasClass("has-error")) {
            error = error + 1;
        }
    })
    if ($("#review_terms input").prop("checked")) {
         valid = true;
         $("#review-terms_error").css("display","none");
    } else {
        error = error + 1;
        $("#review-terms_error").css("display","block");
    }

    if (error > 0) {
        valid = false;
    }
    return valid;
})
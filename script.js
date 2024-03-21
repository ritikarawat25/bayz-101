    $(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 600) {
          $(".navbar").css("background" , "#36255a");
        }
  
        else{
            $(".navbar").css("background" , "none");  	
        }
    });
    $('#save-info').click(function(){
        var name = $('#name').val();
        var phone = $('#phone-no').val();
        var email = $('#email').val();

        if(name == ""){
            $('#name_err').html('Name is Required');
            return false
        }else{
            $('#name_err').html('');
        }
        if(phone == ""){
            $('#phone_err').html('Phone Number is Required');
            return false
        }else{
            $('#phone_err').html('');
        }
        if(email == ""){
            $('#email_err').html('Email is Required');
            return false
        }else{
            $('#email_err').html('');
        }
        window.open('binghatti-canal-brochure.pdf');
    });
    $('#save-info-b').click(function(){
        // alert('Hello');
        // window.open('binghatti-canal-brochure.pdf');
        var name_b = $('#name_b').val();
        var phone_b = $('#country-code').val();
        var email_b = $('#email_b').val();
        if(name_b == ""){
            $('#name_err_b').html('Name is required');
            return false
        }else{
            $('#name_err_b').html('');
        }
        if(phone_b == ""){
            $('#phone_err_b').html('Phone No is required');
            return false
        }else{
            $('#phone_err_b').html('');
        }if(email_b == ""){
            $('#email_err_b').html('Email is required');
            return false
        }else{
            $('#email_err_b').html('');
        }
        $('<a href="binghatti-canal-brochure.pdf" download>')[0].click();
    });

    $('#country-code').on('input', function(){
        $('#country-code').val($('#country-code').val().replace(/[^0-9]/g,''));
    });

    });

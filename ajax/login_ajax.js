
$(() => {
    $('#login-form').submit(function(event) {
        event.preventDefault();

        $.ajax({
            url:'../models/login_authentication.php',
            type:'POST',
            data: $(this).serialize(),
            dataType:'json',

            success: function(response){
                if(response.errors.length > 0){
                    alert(response.errors[0]);
                }else{
                    alert(response.message);
                    window.location.href = "home_page.php";
                }
            },

            error: function(){
                $('#response').html('<p style = "color: red; "> Invalid Account. </p>');
            }
        })
    })
})


$(() => {
    $('#register-form').submit(function(event) {
        event.preventDefault();

        $.ajax({
            url:'../models/register.php',
            type:'POST',
            data: $(this).serialize(),
            dataType:'json',

            success: function(response){
                if(response.errors.length > 0){
                    alert(response.errors[0]);
                }else{
                    alert(response.message);
                    window.location.href = "login_page.php";
                }
            },

            error: function(){
                $('#response').html('<p style = "color: red; "> Invalid username form. </p>');
            }
        })
    })
})
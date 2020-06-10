$(function () {

    var host = window.location.protocol+"//"+location.host;
    $(document).on('click','.btn-login',function()
    {
        var user = $('.username').val();
        var pass = $('.password').val();

        var data = {username: user, password: pass};
        if (user == "" || pass == "") 
        {
            alert("Username or Password is empty");
        }
        else
        {
            $.ajax({
                url: host+"/e-tourism/prosess",
                data: data,
                type: 'post',
                success: function(response)
                {
                    if (response == "Login Berhasil") 
                    {
                        window.location.assign(host+'/e-tourism/stakeholder');
                    }
                },
                error: function(xhr)
                {
                    console.log(xhr.status);
                }
            })
        }
        
    })

    function check_login()
    {
        $('#sign_in').validate({
        highlight: function (input) {
            console.log(input);
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input-group').append(error);
        }
    });
    }
});
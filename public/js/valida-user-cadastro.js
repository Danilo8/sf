$(document).ready(function () {
    var name;
    var email;
    var phone;
    var password;
    var password_confirm;

    $("#name").blur(function () {
        if ($('#name').val() == '') {
            $('#name').css({ 'border-color': 'red' });
            $('#error_name').html('Nome é Obrigatório!');
            name = false;            
        } else {
            $('#name').css({ 'border': '1px solid #ced4da' });
            $('#error_name').html('');
            name = true;            
        }
    });

    $("#email").blur(function () {
        if ($('#email').val() == '') {
            $('#email').css({ 'border-color': 'red' });
            $('#error_email').html('Email é Obrigatório!');
            email = false;            
        } else {
            $('#email').css({ 'border': '1px solid #ced4da' });
            $('#error_email').html('');
            email = true;            
        }
    });

    $("#phone").blur(function () {
        if ($('#phone').val() == '') {
            $('#phone').css({ 'border-color': 'red' });
            $('#error_phone').html('Telefone é Obrigatório!');
            phone = false;            
        } else {
            $('#phone').css({ 'border': '1px solid #ced4da' });
            $('#error_phone').html('');
            phone = true;            
        }
    });

    $("#password").blur(function () {
        if ($('#password').val() == '') {
            $('#password').css({ 'border-color': 'red' });
            $('#error_password').html('Senha é Obrigatória!');
            password = false;            
        } else {
            if ($("#password").val().length < 6) {
                $('#error_password').html("Senha precisa no mínimo ter 6 caracteres!");
                $('#password').css({ 'border-color': 'red' });
                password = false;                
            } else {
                $('#error_password').html("");
                $('#password').css({ 'border': '1px solid #ced4da' });
                password = true;               
            }            
        }
    });

    $("#password_confirm").blur(function () {
        if ($("#password_confirm").val() == "") {
            $("#error_password_confirm").html("Confirmação de Senha é Obrigatório!");
            $("#password_confirm").css({ 'border-color': 'red' });
            password_confirm = false;            
        } else {
            if ($("#password_confirm").val() != $("#password").val()) {
                $('#error_password_confirm').html("Senhas são diferentes!");
                $('#password_confirm').css({ 'border-color': 'red' });
                password_confirm = false;                
            } else {
                $('#error_password_confirm').html("");
                $('#password_confirm').css({ 'border': '1px solid #ced4da' });
                password_confirm = true;                
            }
        }
    });
});
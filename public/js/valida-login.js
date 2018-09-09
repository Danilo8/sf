$(document).ready(function () {

    var email;
    var password;

    $("#email").blur(function () {
        valida_email();
    });
    $("#password").blur(function () {
        valida_senha();
    });
    $("#btn-login").click(function () {
        valida_email();
        valida_senha();
    });

    function valida_email() {
        if ($('#email').val() == "") {
            $('#error_email').html("Esse campo é Obrigatório!");
            $('#email').css({ 'border-color': 'red' });
            email = false; 
            btn();                     
        } else {
            var sEmail = $("#email").val();
            // filtros
            var emailFilter = /^.+@.+\..{2,}$/;
            var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/
            // condição
            if (!(emailFilter.test(sEmail)) || sEmail.match(illegalChars)) {
                $('#error_email').html("Email Inválido!");
                $('#email').css({ 'border-color': 'red' });   
                email = false;
                btn();                             
            } else {
                $('#email').css({ 'border': '1px solid #ced4da' });
                $('#error_email').html('');          
                email = true;
                btn();      
            }
        }
    }

    function valida_senha() {
        if ($("#password").val() == "") {
            $("#error_password").html("Esse campo é Obrigatório!");
            $("#password").css({ 'border-color': 'red' });
            password = false;
            btn();
        } else {
            $('#error_password').html("");
            $('#password').css({ 'border': '1px solid #ced4da' });
            password = true;
            btn();
        }
    }

    function btn() {
        if (email && password) {
            $("#btn-login").attr('type', 'submit');
        } else {
            $("#btn-login").attr('type', 'button');
        }
    }
    
});
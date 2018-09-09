$(document).ready(function () {
    $("#email").blur(function () {
        if ($('#email').val() == "") {
            $('#error_email').html("Esse campo é Obrigatório!");
            $('#email').css({ 'border-color': 'red' });                        
        } else {
            var sEmail = $("#email").val();
            // filtros
            var emailFilter = /^.+@.+\..{2,}$/;
            var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/
            // condição
            if (!(emailFilter.test(sEmail)) || sEmail.match(illegalChars)) {
                $('#error_email').html("Email Inválido!");
                $('#email').css({ 'border-color': 'red' });                                
            } else {
                $('#email').css({ 'border': '1px solid #ced4da' });
                $('#error_email').html('');                
            }
        }
    });
});
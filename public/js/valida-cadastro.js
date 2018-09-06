$(document).ready(function () {

    /**
     * -----------------------------------------------------------------------
     * Validando os Dados do Proprietário
     * -----------------------------------------------------------------------
     */

    /**
     * -----------------------------------------------------------------------
     * Variaveis para validar o btn1
     * -----------------------------------------------------------------------
     */
    var owner_name;
    var cpf;
    var owner_email;
    var owner_phone;
    var btn1;

    /**
     * -----------------------------------------------------------------------
     * Função que verifica se o campo Nome do Proprietário 
     * foi preenchido ou não.
     * -----------------------------------------------------------------------
     */
    $('#owner_name').blur(function () {
        if ($('#owner_name').val() == '') {
            $('#owner_name').css({'border-color':'red'});
            $('#error_owner_name').html('Nome do Proprietário é Obrigatório!');
            owner_name = false;
            validaBtn1();
        } else {
            $('#owner_name').css({ 'border': '1px solid #ced4da' });
            $('#error_owner_name').html('');
            owner_name = true;
            validaBtn1();
        }
    });

    /**
     * -----------------------------------------------------------------------
     * Função que verifica se o campo CPF do Proprietário 
     * foi preenchido ou não.
     * -----------------------------------------------------------------------
     */
    $('#cpf').blur(function () {
        if ($('#cpf').val() == '') {
            $('#cpf').css({'border-color':'red'});
            $('#error_cpf').html('CPF do Proprietário é Obrigatório!');
            cpf = false;
            validaBtn1();
        } else {
            var valido = TesteCPF($("#cpf").val().replace(/\.|\-/g, ''));
            if (valido) {
                $('#cpf').css({ 'border': '1px solid #ced4da' });
                $('#error_cpf').html('');
                cpf = true;
                validaBtn1();
            } else {
                $('#error_cpf').html('CPF Inválido!');
                $('#cpf').css({ 'border-color': 'red' });
                cpf = false;
                validaBtn1();
            }
        }
    });

    /**
     * -----------------------------------------------------------------------
     * Função que verifica se o campo Email do Proprietário 
     * foi preenchido ou não.
     * -----------------------------------------------------------------------
     */
    $("#owner_email").blur(function () {
        if ($('#owner_email').val() == "") {
            $('#error_owner_email').html("Email do Proprietário é Obrigatório!");
            $('#owner_email').css({ 'border-color': 'red' });
            owner_email = false;
            validaBtn1();
        } else {
            var sEmail = $("#owner_email").val();
            // filtros
            var emailFilter = /^.+@.+\..{2,}$/;
            var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/
            // condição
            if (!(emailFilter.test(sEmail)) || sEmail.match(illegalChars)) {
                $('#error_owner_email').html("Email Inválido!");
                $('#owner_email').css({ 'border-color': 'red' });
                owner_email = false;
                validaBtn1();
            } else {
                $('#owner_email').css({ 'border': '1px solid #ced4da' });
                $('#error_owner_email').html('');
                owner_email = true;
                validaBtn1();
            }
        }
    });

    /**
     * -----------------------------------------------------------------------
     * Função que verifica se o campo Telefone do Proprietário 
     * foi preenchido ou não.
     * -----------------------------------------------------------------------
     */
    $("#owner_phone").blur(function () {
        if ($("#owner_phone").val() == "") {
            $('#error_owner_phone').html("Telefone do Proprietário é Obrigatório!");
            $('#owner_phone').css({ 'border-color': 'red' });
            owner_phone = false;
            validaBtn1();
        } else {
            if ($("#owner_phone").val().length < 13) {
                $('#error_owner_phone').html("Telefone Inválido!");
                $('#owner_phone').css({ 'border-color': 'red' });
                owner_phone = false;
                validaBtn1();
            } else {
                $('#error_owner_phone').html("");
                $('#owner_phone').css({ 'border': '1px solid #ced4da' });
                owner_phone = true;
                validaBtn1();
            }
        }
    });

    /**
     * ----------------------------------------------------------
     * Quando o btn1 for clicado
     * ----------------------------------------------------------
     */
    $('#btn1').click(function () {
        if (btn1) {
            animation('owner','restaurant');
        }
    });

    /**
     * ----------------------------------------------------------------
     * Função que verifica se o CPF é valido
     * ----------------------------------------------------------------
     * @param {*} strCPF 
     * @return false or true
     * ----------------------------------------------------------------
     */
    function TesteCPF(strCPF) {
        var Soma;
        var Resto;
        Soma = 0;
        if (strCPF == "00000000000") return false;

        for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11)) Resto = 0;
        if (Resto != parseInt(strCPF.substring(9, 10))) return false;

        Soma = 0;
        for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11)) Resto = 0;
        if (Resto != parseInt(strCPF.substring(10, 11))) return false;
        return true;
    }

    /**
     * -----------------------------------------------------------
     * Função que abilita o btn1
     * -----------------------------------------------------------
     * @returns false or true
     * -----------------------------------------------------------
     */
    function validaBtn1() {
        if (owner_name && owner_email && cpf && owner_phone) {
            $("#btn1").removeClass("disabled");
            btn1 = true;
        } else {
            $("#btn1").addClass("disabled");
            btn1 = false;
        }
    }

    /**
     * -----------------------------------------------------------------------
     * Validando os Dados do Restaurante
     * -----------------------------------------------------------------------
     */

    /**
     * -----------------------------------------------------------------------
     * Variaveis para validar o btn2
     * -----------------------------------------------------------------------
     */
    var restaurant_name;
    var cnpj;
    var restaurant_phone;
    var address;
    var neighborhood;
    var state;
    var city;
    var cep;

    /**
     * -----------------------------------------------------------------------
     * Função que verifica se o campo Nome do Restaurante 
     * foi preenchido ou não.
     * -----------------------------------------------------------------------
     */
    $('#restaurant_name').blur(function () {
        if ($('#restaurant_name').val() == '') {
            $('#restaurant_name').css({ 'border-color': 'red' });
            $('#error_restaurant_name').html('Nome do Restaurante é Obrigatório!');
            restaurant_name = false;
            validaBtn2();
        } else {
            $('#restaurant_name').css({ 'border': '1px solid #ced4da' });
            $('#error_restaurant_name').html('');
            restaurant_name = true;
            validaBtn2();
        }
    });

    /**
     * -----------------------------------------------------------------------
     * Função que verifica se o campo CNPJ do Restaurante 
     * foi preenchido ou não.
     * -----------------------------------------------------------------------
     */
    $("#cnpj").blur(function () {
        if ($("#cnpj").val() == "") {
            $("#error_cnpj").html("CNPJ do Restaurante é Obrigatório!");
            $("#cnpj").css({ 'border-color': 'red' });
            cnpj = false;
            validaBtn2();
        } else {
            var valido = TesteCNPJ($("#cnpj").val());
            if (valido) {
                $("#error_cnpj").html("");
                $("#cnpj").css({ 'border': '1px solid #ced4da' });
                cnpj = true;
                validaBtn2();
            } else {
                $("#error_cnpj").html("CNPJ Inválido!");
                $("#cnpj").css({ 'border-color': 'red' });
                cnpj = false;
                validaBtn2();
            }
        }
    });

    /**
     * -----------------------------------------------------------------------
     * Função que verifica se o campo Telefone do Restaurante 
     * foi preenchido ou não.
     * -----------------------------------------------------------------------
     */
    $("#restaurant_phone").blur(function () {
        if ($("#restaurant_phone").val() == "") {
            $("#error_restaurant_phone").html("Telefone do Restaurante é Obrigatório!");
            $("#restaurant_phone").css({ 'border-color': 'red' });
            restaurant_phone = false;
            validaBtn2();
        } else {
            if ($("#restaurant_phone").val().length < 13) {
                $('#error_restaurant_phone').html("Telefone Inválido!");
                $('#restaurant_phone').css({ 'border-color': 'red' });
                restaurant_phone = false;
                validaBtn2();
            } else {
                $('#error_restaurant_phone').html("");
                $('#restaurant_phone').css({ 'border': '1px solid #ced4da' });
                restaurant_phone = true;
                validaBtn2();
            }
        }
    });

    /**
     * -----------------------------------------------------------------------
     * Função que verifica se o campo Endereço do Restaurante 
     * foi preenchido ou não.
     * -----------------------------------------------------------------------
     */
    $("#address").blur(function () {
        if ($("#address").val() == "") {
            $("#error_address").html("Endereço do Restaurante é Obrigatório!");
            $("#address").css({ 'border-color': 'red' });
            address = false;
            validaBtn2();
        } else {
            $('#error_address').html("");
            $('#address').css({ 'border': '1px solid #ced4da' });
            address = true;
            validaBtn2();
        }
    });

    /**
     * -----------------------------------------------------------------------
     * Função que verifica se o campo Bairro do Restaurante 
     * foi preenchido ou não.
     * -----------------------------------------------------------------------
     */
    $("#neighborhood").blur(function () {
        if ($("#neighborhood").val() == "") {
            $("#error_neighborhood").html("Bairro é Obrigatório!");
            $("#neighborhood").css({ 'border-color': 'red' });
            neighborhood = false;
            validaBtn2();
        } else {
            $('#error_neighborhood').html("");
            $('#neighborhood').css({ 'border': '1px solid #ced4da' });
            neighborhood = true;
            validaBtn2();
        }
    });

    /**
     * -----------------------------------------------------------------------
     * Função que verifica se o campo Estado do Restaurante 
     * foi preenchido ou não.
     * -----------------------------------------------------------------------
     */
    $("#state").blur(function () {
        if ($("#state").val() == "") {
            $("#error_state").html("Estado é Obrigatório!");
            $("#state").css({ 'border-color': 'red' });
            state = false;
            validaBtn2();
        } else {
            $('#error_state').html("");
            $('#state').css({ 'border': '1px solid #ced4da' });
            state = true;
            validaBtn2();
        }
    });

    /**
     * -----------------------------------------------------------------------
     * Função que verifica se o campo Cidade do Restaurante 
     * foi preenchido ou não.
     * -----------------------------------------------------------------------
     */
    $("#city").blur(function () {
        if ($("#city").val() == "") {
            $("#error_city").html("Cidade é Obrigatório!");
            $("#city").css({ 'border-color': 'red' });
            city = false;
            validaBtn2();
        } else {
            $('#error_city').html("");
            $('#city').css({ 'border': '1px solid #ced4da' });
            city = true;
            validaBtn2();
        }
    });
    
    /**
     * -----------------------------------------------------------------------
     * Função que verifica se o campo CEP do Restaurante 
     * foi preenchido ou não.
     * -----------------------------------------------------------------------
     */
    $("#cep").blur(function () {
        if ($("#cep").val() == "") {
            $("#error_cep").html("CEP é Obrigatório!");
            $("#cep").css({ 'border-color': 'red' });
            cep = false;
            validaBtn2();
        } else {
            $('#error_cep').html("");
            $('#cep').css({ 'border': '1px solid #ced4da' });
            cep = true;
            validaBtn2();
        }
    });

    /**
    * ----------------------------------------------------------
    * Quando o vtr1 for clicado
    * ----------------------------------------------------------
    */
    $('#vtr1').click(function () {
        animation('restaurant', 'owner');
    });

    /**
     * ----------------------------------------------------------
     * Quando o btn2 for clicado
     * ----------------------------------------------------------
     */
    $('#btn2').click(function () {
        if (btn2) {
            animation('restaurant', 'acesso');
        }
    });

    /**
     * -----------------------------------------------------------
     * Função que abilita o btn2
     * -----------------------------------------------------------
     * @returns false or true
     * -----------------------------------------------------------
     */
    function validaBtn2() {
        if (
            restaurant_name && cnpj && restaurant_phone && address &&
            neighborhood && state && city && cep
        ) {
            $("#btn2").removeClass("disabled");
            btn2 = true;
        } else {
            $("#btn2").addClass("disabled");
            btn2 = false;
        }
    }

    /**
     * --------------------------------------------------------
     * Função que verifica se o CNPJ é valido
     * --------------------------------------------------------
     * @param {*} cnpj 
     * @returns false or true
     * --------------------------------------------------------
     */
    function TesteCNPJ(cnpj) {

        cnpj = cnpj.replace(/[^\d]+/g, '');

        if (cnpj == '') return false;

        if (cnpj.length != 14)
            return false;

        // Elimina CNPJs invalidos conhecidos
        if (cnpj == "00000000000000" ||
            cnpj == "11111111111111" ||
            cnpj == "22222222222222" ||
            cnpj == "33333333333333" ||
            cnpj == "44444444444444" ||
            cnpj == "55555555555555" ||
            cnpj == "66666666666666" ||
            cnpj == "77777777777777" ||
            cnpj == "88888888888888" ||
            cnpj == "99999999999999")
            return false;

        // Valida DVs
        tamanho = cnpj.length - 2
        numeros = cnpj.substring(0, tamanho);
        digitos = cnpj.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0))
            return false;

        tamanho = tamanho + 1;
        numeros = cnpj.substring(0, tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1))
            return false;

        return true;

    }

    /**
    * -----------------------------------------------------------------------
    * Validando os Dados do Restaurante
    * -----------------------------------------------------------------------
    */

    /**
    * ----------------------------------------------------------
    * Quando o vtr2 for clicado
    * ----------------------------------------------------------
    */
    $('#vtr2').click(function () {
        animation('acesso', 'restaurant');
    });


    /**
     * ====================================================================
     */

    /**
     * -------------------------------------------------------------
     * Função que troca as divs
     * -------------------------------------------------------------
     * @param {*} div_hide 
     * @param {*} div_show 
     * @returns void
     * -------------------------------------------------------------
     */
    function animation(div_hide, div_show) {
        $("#" + div_hide).css({ 'display': 'none' });
        $("#" + div_show).css({ 'display': 'block' });
    }
});




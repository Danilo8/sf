$(document).ready(function () {
    var pn;
    var pp;
    var pd;

    $('#continuar').click(function () {
        if ($('#product_name').val() == "") {
            $('#product_name').css({'border-color':'red'});
            pn = false;
        } else {
            $('#product_name').css({ 'border-color': '#ced4da' });
            pn = true;
        }
        
        if ($('#product_price').val() == "") {
            $('#product_price').css({'border-color':'red'});
            pp = false;
        } else {
            $('#product_price').css({ 'border-color': '#ced4da' });
            pp = true;
        }
        
        if ($('#product_description').val() == "") {
            $('#product_description').css({'border-color':'red'});
            pd = false;
        } else {
            $('#product_description').css({ 'border-color': '#ced4da' });
            pd = true;
        }

        if (pn && pp && pd) {
            $('#produto').css({'display':'none'});
            $('#variacao').css({'display':'block'});
            $('#step1').removeClass('active');
            $('#step2').addClass('active');
        }
    });

    $("#voltar").click(function () {
        $('#produto').css({ 'display': 'block' });
        $('#variacao').css({ 'display': 'none' });
        $('#step1').addClass('active');
        $('#step2').removeClass('active');
    });
});

function digita(d, t) {
    var data = d.length;
    var tamanho = document.getElementById(t);

    tamanho.innerHTML = 500 - data;
}

function abrirModal() {
    $('#produto').css({ 'display': 'block' });
    $('#variacao').css({ 'display': 'none' });
}
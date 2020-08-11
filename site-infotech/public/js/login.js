$('#email').focusin(function () {
    $('#lEmail').addClass('valido');
});

$('#email').focusout(function () {
    verificarEmail();
});

$('#senha').focusout(function () {
    verificarSenha();
});

$('#senha').focusin(function () {
    $('#lSenha').addClass('valido');
});

function verificarEmail(){
    if($('#email').val().length === 0)
        $('#lEmail').removeClass('valido');
    else
        $('#lEmail').addClass('valido');
}

function verificarSenha(){
    if($('#senha').val().length === 0)
        $('#lSenha').removeClass('valido');
    else
        $('#lSenha').addClass('valido');
}


window.onload = function () {
    verificarSenha();
    verificarEmail();
};
